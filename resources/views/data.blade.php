<?php
include 'database.blade.php';

// Mengambil jumlah kamar
$available = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Tersedia'")->fetch_assoc()['20'];
$occupied = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Terisi'")->fetch_assoc()['20'];
$under_maintenance = $conn->query("SELECT COUNT(*) as total FROM rooms WHERE status = 'Dalam Perbaikan'")->fetch_assoc()['20'];

// Mengambil data reservasi
$reservations = $conn->query("SELECT * FROM reservations ORDER BY id DESC LIMIT 30");
// Mengambil data kamar
$rooms = $conn->query("SELECT * FROM rooms");
// Mengambil data fasilitas
$facilities = $conn->query("SELECT * FROM facilities");
// Mengambil laporan bulanan
$monthly_report = $conn->query("SELECT * FROM reservations WHERE status = 'Completed' AND MONTH(check_out) = MONTH(CURRENT_DATE)");
?>