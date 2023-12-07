<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\VenueImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venue extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function venueImages()
    {
        return $this->hasMany(VenueImage::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
