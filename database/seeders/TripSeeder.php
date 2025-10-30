<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Delivery;

class TripSeeder extends Seeder
{
    public function run()
    {
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        $deliveries = Delivery::all();

        foreach (range(1, 15) as $i) {
            Trip::create([
                'driver_id' => $drivers->random()->id,
                'vehicle_id' => $vehicles->random()->id,
                'delivery_id' => $deliveries->random()->id,
                'type' => fake()->randomElement(['local', 'intercity', 'international']),
                'start_time' => now()->subHours(rand(2, 10)),
                'end_time' => now(),
                'distance_km' => rand(50, 1000),
                'total_cost' => rand(500, 5000),
            ]);
        }
    }
}
