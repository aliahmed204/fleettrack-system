<?php

namespace App\Services;

use App\Models\MaintenanceRequest;

class MaintenanceService
{
    public function create(array $data): MaintenanceRequest
    {
        return MaintenanceRequest::create($data);
    }
}
