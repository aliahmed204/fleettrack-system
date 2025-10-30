<?php

namespace Database\Factories;

use App\Enums\DriverStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'license_no' => strtoupper($this->faker->bothify('LIC-###??')),
            'status' => $this->faker->randomElement(array_column(DriverStatus::cases(), 'value')),
        ];
    }
}
