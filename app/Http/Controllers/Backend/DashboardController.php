<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Order;
use App\Models\Venue;
use App\Models\Booking;
use App\Models\Location;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $total_booking_count = Booking::count();
        $all_locations = Location::count();
        $total_venues = Venue::count();
        $total_customers = User::where('role_id', 2)->count();
        $total_testimonials = Testimonial::count();
        $bookings = Booking::with(['user', 'venue'])->orderBy('id', 'desc')->paginate(10);

        $booking_on_2022 = Booking::whereBetween('created_at', ['2022-01-01', '2022-12-31'])->count();
        $booking_on_2023 = Booking::whereBetween('created_at', ['2023-01-01', '2023-12-31'])->count();
        $booking_on_2024 = Booking::whereBetween('created_at', ['2024-01-01', '2024-12-31'])->count();


        $booking_yearwise = array($booking_on_2022, $booking_on_2023, $booking_on_2024);

        return view('backend.pages.Dashboard', compact(
            'total_booking_count',
            'all_locations',
            'total_venues',
            'total_customers',
            'total_testimonials',
            'bookings',
            'booking_yearwise',
        ));

    }
}
