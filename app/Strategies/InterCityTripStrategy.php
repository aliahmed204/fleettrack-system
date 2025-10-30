<?php

namespace App\Strategies;

class InterCityTripStrategy implements TripCostStrategyInterface
{
    public function calculate(array $data): array
    {
        $base_fuel_cost = $data['distance_km'] * 3;
        $custom_fees = 200;
        $insurance = 100;

        $total_cost = $base_fuel_cost + $custom_fees + $insurance;

        return [
            'total_cost' => round($total_cost, 2),
            'details' => [
                'base_fuel_cost' => $base_fuel_cost,
                'custom_fees' => $custom_fees,
                'insurance' => $insurance
            ]
        ];
    }
}
