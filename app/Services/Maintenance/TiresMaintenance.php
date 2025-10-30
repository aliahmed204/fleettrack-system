<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;
use App\Services\MaintenanceService;
use App\Services\WarehouseService;

class TiresMaintenance implements  MaintenanceInterface
{
    public function __construct( protected MaintenanceService $service) {}

    public function handleRequest(array $data)
    {
        $maintenance = $this->service->create($data);

        WarehouseService::notifyTireTeam($maintenance);

        return [
            'message' => 'Tire maintenance request sent to warehouse team.',
            'maintenance' => $maintenance
        ];
    }
}