<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use App\Models\VehicleLocation;

class VehicleLocationSeeder extends Seeder
{
    public function run()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            foreach (range(1, 3) as $i) {
                VehicleLocation::create([
                    'vehicle_id' => $vehicle->id,
                    'latitude' => fake()->latitude(),
                    'longitude' => fake()->longitude(),
                    'recorded_at' => now()->subMinutes(rand(1, 60)),
                ]);
            }
        }
    }
}
