<?php

namespace App\Http\Controllers\Backend;

use App\Models\Venue;
use App\Models\Location;
use App\Models\VenueImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\VenueStoreRequest;
use App\Http\Requests\VenueUpdateRequest;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::where('is_active', 1)
            ->with('location')
            ->latest('id')
            ->select('id', 'location_id', 'venue_name', 'venue_slug', 'venue_address', 'venue_price', 'venue_capacity', 'venue_description', 'venue_image', 'updated_at')
            ->paginate(25);

            return view('backend.pages.venue.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::select(['id','location_name'])->get();
        return view('backend.pages.venue.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenueStoreRequest $request)
    {


        $venue = Venue::create([
            'location_id' => $request->location_id,
            'venue_name' => $request->venue_name,
            'venue_slug' => Str::slug($request->venue_name),
            'venue_address' => $request->venue_address,
            'venue_capacity' => $request->venue_capacity,
            'venue_price' => $request->venue_price,
            'venue_description' => $request->venue_description,
            'venue_image' => $request->venue_image,
            'additional_info' => $request->additional_info,

        ]);
        $this->image_upload($request, $venue->id);
        $this->multiple_image__upload($request, $venue->id);

        Toastr::success('Data Stored Successfully!');
        return redirect()->route('venue.index');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {

        $venue = Venue::where('venue_slug', $slug)->first();
        $locations = Location::select(['id','location_name'])->get();
        return view('backend.pages.venue.edit', compact('locations', 'venue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VenueUpdateRequest $request, string $slug)
    {
        $venue = Venue::where('venue_slug', $slug)->first();

// Check if a new image is being uploaded
if ($request->hasFile('venue_image')) {
    // Delete the old image if it exists
    if ($venue->venue_image && $venue->venue_image != 'default_venue.jpg') {
        $photo_location = 'public/uploads/venue_photos/' . $venue->venue_image;
        if (File::exists($photo_location)) {
            unlink($photo_location);
        }
    }

    // Upload and save the new image
    $this->image_upload($request, $venue->id);
}

$venue->update([
    'location_id' => $request->location_id,
    'venue_name' => $request->venue_name,
    'venue_slug' => Str::slug($request->venue_name),
    'venue_address' => $request->venue_address,
    'venue_capacity' => $request->venue_capacity,
    'venue_price' => $request->venue_price,
    'venue_description' => $request->venue_description,
    // Check if a new image is being uploaded
    'venue_image' => $request->hasFile('venue_image') ? $venue->id . '.' . $request->file('venue_image')->getClientOriginalExtension() : $venue->venue_image,
    'additional_info' => $request->additional_info,
]);

$this->multiple_image__upload($request, $venue->id);

Toastr::success('Data Updated Successfully!');
return redirect()->route('venue.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
{
    $venue = Venue::where('venue_slug', $slug)->first();

    if ($venue->venue_image) {
        $photo_location = 'public/uploads/venue_photos/' . $venue->venue_image;

        // Check if the file exists before attempting to unlink
        if (File::exists($photo_location)) {
            unlink($photo_location);
        } else {
            // Handle the case where the file doesn't exist
            // You might want to log this or take appropriate action
        }
    }

    $venue->delete();

    Toastr::success('Data Deleted Successfully!');
    return redirect()->route('venue.index');
}

    /**
     * Image Upload
     */
    public function image_upload($request, $venue_id)
{
    $venue = Venue::findOrFail($venue_id);

    if ($request->hasFile('venue_image')) {
        if ($venue->venue_image != 'default_venue.jpg') {
            // Delete old photo
            $photo_location = 'public/uploads/venue_photos/';
            $old_photo_location = $photo_location . $venue->venue_image;

            // Add error handling for unlink
            if (file_exists(base_path($old_photo_location))) {
                unlink(base_path($old_photo_location));
            } else {
                // Handle the case where the file doesn't exist
                // You might want to log this or take appropriate action
            }
        }

        $photo_location = 'public/uploads/venue_photos/';
        $uploaded_photo = $request->file('venue_image');
        $new_photo_name = $venue->id . '.' . $uploaded_photo->getClientOriginalExtension();
        $new_photo_location = $photo_location . $new_photo_name;

        Image::make($uploaded_photo)->resize(1895, 710)->save(base_path($new_photo_location), 40);

        $venue->update([
            'venue_image' => $new_photo_name,
        ]);
    }
}

public function multiple_image__upload($request, $venue_id)
{
    if ($request->hasFile('venue_multiple_image')) {
        $photo_location = 'public/uploads/venue_photos/';
        $flag = 1;

        // Delete old photos first
        $multiple_images = VenueImage::where('venue_id', $venue_id)->get();

        foreach ($multiple_images as $multiple_image) {
            if ($multiple_image->venue_multiple_image != 'default_venue.jpg') {
                $old_photo_location = $photo_location . $multiple_image->venue_multiple_image;

                // Add error handling for unlink
                if (file_exists(base_path($old_photo_location))) {
                    unlink(base_path($old_photo_location));
                } else {
                    // Handle the case where the file doesn't exist
                    // You might want to log this or take appropriate action
                }
            }

            $multiple_image->delete();
        }

        foreach ($request->file('venue_multiple_image') as $single_photo) {
            $new_photo_name = $venue_id . '-' . $flag . '.' . $single_photo->getClientOriginalExtension();
            $new_photo_location = $photo_location . $new_photo_name;

            Image::make($single_photo)->resize(1895, 710)->save(base_path($new_photo_location), 40);

            VenueImage::create([
                'venue_id' => $venue_id,
                'venue_multiple_image' => $new_photo_name,
            ]);

            $flag++;
        }
    }
}

}
