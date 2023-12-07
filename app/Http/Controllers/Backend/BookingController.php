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

    public function approve(Booking $booking)
    {
        $booking->update(['status' => 'approved']);
        Toastr::success('Booking approved successfully.');
        return redirect()->back()->with('success', 'Booking approved successfully.');
    }

    public function reject(Booking $booking)
    {
        $booking->update(['status' => 'rejected']);
        Toastr::success('Booking rejected successfully.');
        return redirect()->back()->with('success', 'Booking rejected successfully.');
    }
}
