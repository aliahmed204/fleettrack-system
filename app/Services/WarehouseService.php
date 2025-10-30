<?php

namespace App\Services;

use App\Models\MaintenanceRequest;
use Illuminate\Support\Facades\Log;

class WarehouseService
{
    public static function notifyTireTeam(MaintenanceRequest $maintenance)
    {
        Log::info('Notified tire warehouse team', [
            'maintenance_id' => $maintenance->id,
            'vehicle_id' => $maintenance->vehicle_id,
            'description' => $maintenance->description,
        ]);

        return true;
    }
}
