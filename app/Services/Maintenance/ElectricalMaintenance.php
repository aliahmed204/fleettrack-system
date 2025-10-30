<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;
use App\Services\{
    ExternalWorkshopAPI,
    MaintenanceService
};

class ElectricalMaintenance implements MaintenanceInterface
{
    public function __construct(protected MaintenanceService $service) {}

    public function handleRequest(array $data)
    {
        $maintenance = $this->service->create($data);

        ExternalWorkshopAPI::send($maintenance);

        return [
            'message' => 'Electrical issue sent to external workshop.',
            'maintenance' => $maintenance
        ];
    }
}