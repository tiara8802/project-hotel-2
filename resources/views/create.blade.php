<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
</head>
<body>
    <h1>Create Reservation</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" id="customer_name" required>

        <label for="contact_info">Contact Info:</label>
        <input type="text" name="contact_info" id="contact_info" required>

        <label for="check_in">Check In:</label>
        <input type="date" name="check_in" id="check_in" required>

        <label for="check_out">Check Out:</label>
        <input type="date" name="check_out" id="check_out" required>

        <label for="number_of_guests">Number of Guests:</label>
        <input type="number" name="number_of_guests" id="number_of_guests" required min="1">

        <label for="room_type">Room Type:</label>
        <input type="text" name="room_type" id="room_type" required>

        <label for="room_number">Room Number:</label>
        <input type="text" name="room_number" id="room_number">

        <label for="payment_status">Payment Status:</label>
        <select name="payment_status" id="payment_status" required>
            <option value="Pending">Pending</option>
            <option value="Paid">Paid</option>
            <option value="Verified">Verified</option>
        </select>

        <label for="booking_status">Booking Status:</label>
        <select name="booking_status" id="booking_status" required>
            <option value="Pending">Pending</option>
            <option value="Confirmed">Confirmed</option>
            <option value="Checked-In">Checked-In</option>
            <option value="Canceled">Canceled</option>
            <option value="Completed">Completed</option>
        </select>

        <button type="submit">Reserve</button>
    </form>
</body>
</html>