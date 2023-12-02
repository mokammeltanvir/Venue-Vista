<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $location_name = $this->faker->location_name;
        $location_slug = Str::slug($location_name);
        return [
            'location_name' => $location_name,
            'location_slug' => $location_slug,
        ];
    }
}
