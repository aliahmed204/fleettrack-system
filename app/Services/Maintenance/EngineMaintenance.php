<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;
use App\Enums\MaintenanceStatus;
use App\Models\User;
use App\Services\MaintenanceService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class EngineMaintenance implements MaintenanceInterface
{
    public function __construct(protected MaintenanceService $service) {}

    public function handleRequest(array $data)
    {
        $maintenance = $this->service->create($data);
        
        // Notify head_mechanic
        // $mechanics = User::where('role', 'head_mechanic')->get();
        // Notification::send($mechanics, new MaintenanceCreated($maintenance));

        return [
            'message' => 'Engine maintenance request created and sent for approval.',
            'maintenance' => $maintenance
        ];

    }
}