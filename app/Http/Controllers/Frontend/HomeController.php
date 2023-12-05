<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Venue;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        // Get all testimonials to show in home page
        $testimonials = Testimonial::where('is_active', 1)
        ->latest('id')
        ->limit(6)
        ->select(['id', 'client_name', 'client_designation', 'client_message', 'client_image'])
        ->get();

        // Get all Venue to show in home page
        $venues = Venue::where('is_active', 1)
        ->latest('id')
        ->limit(6)
        ->select(['id', 'venue_name', 'venue_address', 'venue_price', 'venue_image'])->get();

        // Return home page
        return view('frontend.pages.home', compact('testimonials', 'venues'));

    }
}
