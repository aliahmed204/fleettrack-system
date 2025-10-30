<?php

namespace Database\Factories;

use App\Enums\VehicleStatus;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plate_number' => strtoupper($this->faker->bothify('??-####')),
            'model' => $this->faker->randomElement([
                'Toyota Hilux', 'Nissan Patrol', 'Hyundai H1', 'Ford Transit', 'Chevrolet Tahoe'
            ]),
            'status' => $this->faker->randomElement(array_column(VehicleStatus::cases(), 'value'))
        ];
    }
}
