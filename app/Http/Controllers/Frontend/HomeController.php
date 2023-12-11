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
        ->select('id','venue_name','venue_slug', 'venue_address', 'venue_price', 'venue_capacity', 'venue_image')
        ->paginate(6);

        // Return home page
        return view('frontend.pages.home', compact('testimonials', 'venues'));

    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function venuePage()
    {
        $allvenue = Venue::where('is_active', 1)
        ->latest('id')
        ->select('id','venue_name','venue_slug', 'venue_address', 'venue_price', 'venue_capacity', 'venue_image')
        ->paginate(9);

        return view('frontend.pages.venue-list', compact('allvenue'));
    }

    public function venueDetails($venue_slug)
    {
        $venue = Venue::where('venue_slug', $venue_slug)->with('location', 'venueImages')->firstOrFail();

        return view('frontend.pages.venue-details', compact('venue'));

    }
}
