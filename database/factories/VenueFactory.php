<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $venueName = $this->faker->unique()->words(3, true);
        return [
            'location_id' => Location::select('id')->get()->random()->id,
            'venue_name' => $venueName,
            'venue_slug' => Str::slug($venueName),
            'venue_address' => $this->faker->address,
            'venue_capacity' => $this->faker->numberBetween(100, 1000),
            'venue_price' => $this->faker->numberBetween(1000, 100000),
            'venue_description' => $this->faker->paragraph(3, true),
            'additional_info' => $this->faker->paragraph(2, true),
            'venue_image' => 'default_venue.jpg',
        ];
    }
}
