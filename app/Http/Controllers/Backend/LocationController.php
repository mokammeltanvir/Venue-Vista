<?php

namespace App\Http\Controllers\Backend;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use App\Http\Requests\LocationStoreRequest;
use App\Http\Requests\LocationUpdateRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::latest('id')->select('id', 'location_name', 'location_slug', 'location_image', 'updated_at')->paginate(10);

        return view('backend.pages.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationStoreRequest $request)
    {
        //dd($request->all());
        $location = Location::create([
            'location_name' => $request->location_name,
            'location_slug' => Str::slug($request->location_name),
            'client_designation' => $request->client_designation,
            'client_message' => $request->client_message,
        ]);

        $this->image_upload($request, $location->id);

        Toastr::success('Data Added Successfully!!');
        return redirect()->route('location.index');
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
        $location = Location::where('location_slug', $slug)->first();
        return view('backend.pages.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationUpdateRequest $request, string $slug)
    {
        $location = Location::where('location_slug', $slug)->first();
        $location->update([
            'location_name' => $request->location_name,
            'location_slug' => Str::slug($request->location_name),
            'is_active' => $request->filled('is_active')
        ]);

        $this->image_upload($request, $location->id);

        Toastr::success('Data Updated Successfully!!');
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $location = Location::where('location_slug', $slug)->first();

        if($location->location_image){
            $photo_location = 'uploads/locations/'.$location->location_image;
            unlink($photo_location);
        }

        $location->delete();

        Toastr::success('Data Deleted Successfully!!');
        return redirect()->route('location.index');

    }

    public function image_upload($request, $item_id)
    {

        $location = Location::findOrFail($item_id);
        //dd($request->all(), $location, $request->hasFile('location_image'));
        if ($request->hasFile('location_image')) {
            if ($location->location_image != 'default-location.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/locations/';
                $old_photo_location = $photo_location . $location->location_image;
                unlink(base_path($old_photo_location));
            }
            $photo_location = 'public/uploads/locations/';
            $uploaded_photo = $request->file('location_image');
            $new_photo_name = $location->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_location . $new_photo_name;
            Image::make($uploaded_photo)->resize(360,230)->save(base_path($new_photo_location), 40);

            $check = $location->update([
                'location_image' => $new_photo_name,
            ]);
        }
    }

}
