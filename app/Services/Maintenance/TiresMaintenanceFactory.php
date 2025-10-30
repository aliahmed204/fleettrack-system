<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;

class TiresMaintenanceFactory extends AbstractMaintenanceFactroy
{
    public function createMaintenance(): MaintenanceInterface
    {
        return app(TiresMaintenance::class);
    }
}
