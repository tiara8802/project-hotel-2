<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'number_of_guests' => 'required|integer|min:1',
            'room_type' => 'required|string|max:255',
            'room_number' => 'nullable|string|max:255',
            'payment_status' => 'required|in:Pending,Paid,Verified',
            'booking_status' => 'required|in:Pending,Confirmed,Checked-In,Canceled,Completed',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }
}