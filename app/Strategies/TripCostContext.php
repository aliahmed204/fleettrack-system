<?php

namespace App\Services\Trip;

use App\Strategies\TripCostStrategyInterface;
use InvalidArgumentException;

class TripCostContext
{
    protected TripCostStrategyInterface $strategy;

    public function setStrategy(TripCostStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function calculate(array $data): array
    {
        if (!isset($this->strategy)) {
            throw new InvalidArgumentException("Trip cost strategy not set.");
        }

        return $this->strategy->calculate($data);
    }
}
