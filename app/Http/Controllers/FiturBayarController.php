<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Payment;

class FiturBayarController extends Controller
{
    public function showPaymentForm(Request $request)
    {
        $reservation_id = $request->query('reservation_id');

        if (!$reservation_id) {
            return redirect()->back()->with('error', 'Reservation ID is required!');
        }

        $reservation = Reservation::find($reservation_id);
        if (!$reservation) {
            return redirect()->back()->with('error', 'Reservasi tidak ditemukan!');
        }

        return view('payment', [
            'amount' => $reservation->amount,
            'reservation_id' => $reservation_id
        ]);
    }

    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'payment_method' => 'required|string'
        ]);

        $reservation = Reservation::findOrFail($validated['reservation_id']);

        Payment::create([
            'reservation_id' => $reservation->id,
            'amount' => $reservation->amount,
            'payment_method' => $validated['payment_method'],
            'status' => 'Paid'
        ]);

        return redirect()->route('payment.success')->with('success', 'Payment successful!');
    }
}