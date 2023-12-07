<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function dashboard()
{
    // Retrieve the authenticated user
    $user = Auth::user();

    // Retrieve the user's bookings with associated venues
    $bookings = Booking::where('user_id', $user->id)
        ->with('venue') // Assuming you have a relationship named 'venue' in your Booking model
        ->get();

    return view('frontend.pages.customer-dashboard', compact('user', 'bookings'));
}
}
