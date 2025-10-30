<?php

namespace App\Services\Maintenance;

class MaintenanceFactory
{
    public function create(string $type): AbstractMaintenanceFactroy
    {
        return match ($type) {
            'engine' => app(EngineMaintenanceFactory::class),
            'tires' => app(TiresMaintenanceFactory::class),
            'electrical' => app(ElectricalMaintenanceFactory::class),
            default => throw new \InvalidArgumentException("Invalid maintenance type: {$type}"),
        }; 
    }
}