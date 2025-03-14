<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Nama Customer
            $table->string('contact_info'); // Informasi Kontak
            $table->date('check_in'); // Tanggal Check-In
            $table->date('check_out'); // Tanggal Check-Out
            $table->integer('number_of_guests'); // Jumlah Tamu
            $table->string('room_type'); // Tipe Kamar
            $table->string('room_number')->nullable(); // Nomor Kamar
            $table->enum('payment_status', ['Pending', 'Paid', 'Verified']); // Status Pembayaran
            $table->enum('booking_status', ['Pending', 'Confirmed', 'Checked-In', 'Canceled', 'Completed']); // Status Pemesanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}