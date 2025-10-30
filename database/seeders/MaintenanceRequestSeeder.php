<?php

namespace Database\Seeders;

use App\Enums\MaintenanceIssueType;
use App\Enums\MaintenanceStatus;
use Illuminate\Database\Seeder;
use App\Models\MaintenanceRequest;
use App\Models\Driver;
use App\Models\Vehicle;

class MaintenanceRequestSeeder extends Seeder
{
    public function run()
    {
        $drivers = Driver::all();
        $vehicles = Vehicle::all();

        foreach (range(1, 10) as $i) {
            MaintenanceRequest::create([
                'vehicle_id' => $vehicles->random()->id,
                'driver_id' => $drivers->random()->id,
                'issue_type' => fake()->randomElement(array_column(MaintenanceIssueType::cases(), 'value')),
                'description' => fake()->sentence(),
                'status' => fake()->randomElement(array_column(MaintenanceStatus::cases(), 'value')),
            ]);
        }
    }
}
