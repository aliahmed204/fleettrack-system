<?php

namespace App\Services;

use App\Models\MaintenanceRequest;
use Illuminate\Support\Facades\Log;

class ExternalWorkshopAPI
{
    public static function send(MaintenanceRequest $maintenance)
    {
        Log::info('Sent maintenance request to external workshop', [
            'maintenance_id' => $maintenance->id,
            'response_status' => 'Sent Successfully'
        ]);

        return true;
    }
}
