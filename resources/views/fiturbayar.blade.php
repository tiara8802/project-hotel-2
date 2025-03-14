<!-- resources/views/payment.blade.php -->
<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username database kamu
$password = ""; // Sesuaikan dengan password database kamu
$database = "laravel"; // Nama database

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$status_pembayaran = "Unpaid"; // Default status sebelum pembayaran
$amount = 0; // Default amount

// Ambil jumlah pembayaran dari tabel reservations berdasarkan reservation_id
if (isset($_GET['reservation_id'])) {
    $reservation_id = $_GET['reservation_id'];

    $query = "SELECT amount FROM reservations WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $reservation_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $amount = $row['amount']; // Set nilai amount dari database
    } else {
        die("Reservasi tidak ditemukan!");
    }

    mysqli_stmt_close($stmt);
}

// Proses pembayaran
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bayar'])) {
    $payment_method = $_POST['payment_method'];
    $status_pembayaran = "Paid";

    // Simpan ke tabel payment
    $sql = "INSERT INTO payment (amount, payment_method, status) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "iss", $amount, $payment_method, $status_pembayaran);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Payment successful!');</script>";
    } else {
        echo "<script>alert('Payment failed!');</script>";
    }
    mysqli_stmt_close($stmt);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-center mb-4">Payment</h1>
            <h2 class="text-lg font-medium">Total Amount: <strong>$<?php echo number_format($amount, 2); ?></strong></h2>
            <form method="POST" class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Choose Payment Method:</label>
                <select name="payment_method" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">Cash</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
                <button type="submit" name="bayar" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Pay Now</button>
            </form>
            <hr class="my-4">
            <h5 class="text-center text-lg">Payment Status: 
            <span class="px-2 py-1 text-white rounded-md <?php echo in_array($status_pembayaran, ['Paid', 'Pending', 'Verified']) ? 'bg-green-500' : 'bg-red-500'; ?>">
                    <?php echo $status_pembayaran; ?>
                </span>
            </h5>
        </div>
    </div>
</body>
</html>