<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Venue;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookingStoreRequest;

class BookingController extends Controller
{

    public function create(Venue $venue)
    {
        $venueId = $venue->id; // Get the venue_id from the request or adjust as per your logic
        return view('frontend.pages.bookings', compact('venueId', 'venue'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_date' => 'required|date',
            'event_name' => 'required',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login.page')->with('error', 'Please login to continue.');
        }

        // Get the venue_id from the request or adjust as per your logic
        $venueId = $request->input('venue_id');

        // Create and save booking
        $booking = new Booking([
            'venue_id' => $venueId,
            'user_id' => Auth::user()->id,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'event_name' => $request->event_name,
            'additional_info' => $request->additional_info,
        ]);

        $booking->save();

        // Send notifications
        Toastr::success('Booking request submitted successfully.');

        return redirect()->route('customer.dashboard'); // Redirect to customer.dashboard route
    }
}
