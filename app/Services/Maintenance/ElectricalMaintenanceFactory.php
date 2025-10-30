<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;

class ElectricalMaintenanceFactory extends AbstractMaintenanceFactroy
{
    public function createMaintenance(): MaintenanceInterface
    {
        return app(ElectricalMaintenance::class);
    }
}
