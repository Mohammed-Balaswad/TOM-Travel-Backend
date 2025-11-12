<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;


class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::factory()->create([
            'name' => 'Paris',
            'country' => 'France',
            'description' => 'The Eiffel Tower is a wrought-iron tower in the center of Paris, France. It is the most-visited tourist attraction in the city and a symbol of Paris.',
            'average_rating' => 4.5,
            'category' => 'City',
        ]);
    }
}
