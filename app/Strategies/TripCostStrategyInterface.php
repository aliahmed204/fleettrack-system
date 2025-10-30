<?php

namespace App\Strategies;

interface TripCostStrategyInterface
{
    public function calculate(array $data): array;
}