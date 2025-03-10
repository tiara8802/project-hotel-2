<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_management";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data jumlah kamar
$available = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Tersedia'")->fetch_assoc()['20'];
$occupied = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Terisi'")->fetch_assoc()['20'];
$under_maintenance = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Dalam Perbaikan'")->fetch_assoc()['20'];

// Ambil data reservasi terbaru
$reservations = $conn->query("SELECT * FROM reservations ORDER BY id DESC LIMIT 30");

// Ambil data kamar
$rooms = $conn->query("SELECT * FROM rooms");

// Ambil data fasilitas
$facilities = $conn->query("SELECT * FROM facilities");

// Ambil laporan bulanan (Kamar dengan status Completed)
$monthly_report = $conn->query("SELECT * FROM reservations WHERE status = 'Completed' AND MONTH(check_out) = MONTH(CURRENT_DATE)");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        .summary {
            background: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .sidebar {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h1>Dashboard Admin</h1>

    <div class="summary">
        <h2>Ringkasan Kamar</h2>
        <p>Tersedia: <?php echo $available; ?></p>
        <p>Terisi: <?php echo $occupied; ?></p>
        <p>Dalam Perbaikan: <?php echo $under_maintenance; ?></p>
    </div>

    <div class="sidebar">
        <h2>Data Reservasi Terbaru</h2>
        <table>
            <tr><th>Nama</th><th>Kamar</th><th>Check-in</th><th>Check-out</th><th>Status</th></tr>
            <?php while ($row = $reservations->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['guest_name']; ?></td>
                    <td><?php echo $row['room_id']; ?></td>
                    <td><?php echo $row['check_in']; ?></td>
                    <td><?php echo $row['check_out']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <h2>Data Kamar</h2>
        <table>
            <tr><th>Nomor Kamar</th><th>Status</th></tr>
            <?php while ($room = $rooms->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $room['room_number']; ?></td>
                    <td><?php echo $room['status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <h2>Data Fasilitas</h2>
        <table>
            <tr><th>Nama Fasilitas</th><th>Deskripsi</th></tr>
            <?php while ($facility = $facilities->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $facility['facility_name']; ?></td>
                    <td><?php echo $facility['description']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <h2>Laporan Bulanan</h2>
        <table>
            <tr><th>Nama</th><th>Kamar</th><th>Check-out</th></tr>
            <?php while ($report = $monthly_report->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $report['guest_name']; ?></td>
                    <td><?php echo $report['room_id']; ?></td>
                    <td><?php echo $report['check_out']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>