<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummy_locations = [
                'Uttara',
                'Mirpur',
                'Mohammadpur',
                'Dhanmondi',
                'Gulshan',
        ];

        foreach ($dummy_locations as $location) {
            Location::create([
                'location_name' => $location,
                'location_slug' => Str::slug($location),
            ]);
        }

    }



}
