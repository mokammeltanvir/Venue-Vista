<?php

namespace App\Http\Controllers\Backend;

use App\Models\Venue;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BookingController extends Controller
{
    public function index()
    {
        $venues = Venue::all();
        $bookings = Booking::with('user', 'venue')
            ->orderBy('created_at', 'desc') // Adjust the ordering as needed
            ->paginate(10);

        return view('backend.pages.bookings.index', compact('bookings', 'venues'));
    }

    public function show(Booking $booking)
    {
        return view('backend.pages.bookings.show', compact('booking'));
    }

    public function approve(Booking $booking, Request $request)
    {
        // Validate and sanitize the input
        $request->validate([
            'extra_charges' => 'nullable|numeric|min:0',
        ]);

        $extraCharges = $request->input('extra_charges', 0);

        // Update the booking with the approved status and extra charges
        $booking->update([
            'status' => 'approved',
            'extra_charges' => $extraCharges,
        ]);

        Toastr::success('Booking approved successfully.');
        return redirect()->back()->with('success', 'Booking approved successfully.');
    }

    public function reject(Booking $booking)
    {
        $booking->update(['status' => 'rejected']);
        Toastr::success('Booking rejected successfully.');
        return redirect()->back()->with('success', 'Booking rejected successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        Toastr::success('Booking deleted successfully.');
        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }

    public function paymentStatusApprove(Booking $booking)
    {
        $booking->update(['payment_status' => 'paid']);
        Toastr::success('Payment status approved successfully.');
        return redirect()->back()->with('success', 'Payment status aprove successfully.');
    }
}


