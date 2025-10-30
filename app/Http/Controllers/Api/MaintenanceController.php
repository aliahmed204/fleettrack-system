<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaintenanceRequest;
use App\Services\Maintenance\MaintenanceFactory;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function __construct(protected MaintenanceFactory $factory) {}

    public function store(StoreMaintenanceRequest $request)
    {
        $maintenanceFactory = $this->factory->create($request->validated()['issue_type']);
        $maintenance = $maintenanceFactory->proccess($request->validated());

        return response()->json($maintenance, 201);
    }

}
