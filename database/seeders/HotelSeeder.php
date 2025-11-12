<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::factory()->create([
            'destination_id' => 1,
            'name' => 'De Paris',
            'description' => 'The Eiffel Tower is a wrought-iron tower in the center of Paris, France. It is the most-visited tourist attraction in the city and a symbol of Paris.',
            'location' => 'URL',
            'average_rating' => 4.5,
        ]);
    }
}
