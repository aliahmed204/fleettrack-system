<?php
namespace App\Services\Trip;

use App\Strategies\{
    LocalTripStrategy,
    InterCityTripStrategy,
    InternationalTripStrategy
};

use InvalidArgumentException;

class TripStrategyResolver
{
    public static function resolve(string $type)
    {
        return match (strtolower($type)) {
            'local' => app(LocalTripStrategy::class),
            'intercity' => app(InterCityTripStrategy::class),
            'international' => app(InternationalTripStrategy::class),
            default => throw new InvalidArgumentException("Invalid trip type: {$type}"),
        };
    }
}
