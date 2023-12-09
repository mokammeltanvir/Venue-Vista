<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Venue;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookingStoreRequest;

class BookingController extends Controller
{
    public function create(Venue $venue)
    {
        $venueId = $venue->id;
        $services = Services::getServices(); // Call the getServices method from the Services model
        return view('frontend.pages.bookings', compact('venueId', 'venue', 'services'));
    }

    public function store(BookingStoreRequest $request)
    {
        $validatedData = $request->validated();

        if (!Auth::check()) {
            return redirect()->route('login.page')->with('error', 'Please log in to continue.');
        }

        $venueId = $request->input('venue_id');

        // Check for existing bookings
        $existingBooking = Booking::where('venue_id', $venueId)
            ->where('booking_date', $validatedData['booking_date'])
            ->where('start_time', '<', $validatedData['end_time'])
            ->where('end_time', '>', $validatedData['start_time'])
            ->first();

        if ($existingBooking) {
            Toastr::error('Venue is already booked for this date and time. Please select another date and time or contact us for more information.');
            return redirect()->back()->with('error', 'Venue is already booked for this date and time.');
        }

        // Create and save booking
        $booking = new Booking([
            'venue_id' => $venueId,
            'user_id' => Auth::user()->id,
            'booking_date' => $validatedData['booking_date'],
            'start_time' => $validatedData['start_time'],
            'end_time' => $validatedData['end_time'],
            'event_name' => $validatedData['event_name'],
            'no_of_guests' => $validatedData['no_of_guests'],
            'shift' => $validatedData['shift'],
            'additional_info' => $validatedData['additional_info'],
            'services' => $request->input('services', []),
            'payment_method' => $validatedData['payment_method'],
        ]);

        $booking->save();

        Toastr::success('Booking request submitted successfully.');

        return redirect()->route('customer.dashboard');
    }
}
