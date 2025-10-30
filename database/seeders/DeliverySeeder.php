<?php

namespace Database\Seeders;

use App\Enums\DeliveryStatus;
use Illuminate\Database\Seeder;
use App\Models\Delivery;
use App\Models\Driver;
use App\Models\Vehicle;

class DeliverySeeder extends Seeder
{
    public function run()
    {
        $drivers = Driver::all();
        $vehicles = Vehicle::all();

        foreach (range(1, 20) as $i) {
            Delivery::create([
                'driver_id' => $drivers->random()->id,
                'vehicle_id' => $vehicles->random()->id,
                'customer_name' => fake()->name(),
                'destination' => fake()->city(),
                'status' => fake()->randomElement(array_column(DeliveryStatus::cases(), 'value')),
            ]);
        }
    }
}
