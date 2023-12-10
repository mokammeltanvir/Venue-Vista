<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'venue_id',
        'user_id',
        'booking_date',
        'shift',
        'event_name',
        'services',
        'no_of_guests',
        'additional_info',
        'start_time',
        'end_time',
        'status',
        'payment_status',
        'payment_method',
        'payment_id',
        'extra_charges',
    ];

    protected $casts = [
        'services' => 'array',
    ];

    public function venue()
{
    return $this->belongsTo(Venue::class);
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getServicesAttribute($value)
    {
        return json_decode($value);
    }

    public function setServicesAttribute($value)
    {
        $this->attributes['services'] = json_encode($value);
    }

    public function getBookingDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}
