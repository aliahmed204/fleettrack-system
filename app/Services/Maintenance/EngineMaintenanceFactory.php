<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;

class EngineMaintenanceFactory extends AbstractMaintenanceFactroy
{
    public function createMaintenance(): MaintenanceInterface
    {
        return app(EngineMaintenance::class);
    }
}
