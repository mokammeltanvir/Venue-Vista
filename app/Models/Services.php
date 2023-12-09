<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public static function getServices()
    {
        return [
            'catering' => 'Catering',
            'photography' => 'Photography',
            'videography' => 'Videography',
            'decoration' => 'Decoration',
            // Add more services as needed
        ];
    }
}
