<?php

namespace App\Strategies;

class InternationalTripStrategy implements TripCostStrategyInterface
{
    public function calculate(array $data): array
    {
        $base_fuel_cost = 1000;
        $custom_fees = 2000;
        $insurance = 1500;

        $total_cost = $base_fuel_cost + $custom_fees + $insurance + 0.75;

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
