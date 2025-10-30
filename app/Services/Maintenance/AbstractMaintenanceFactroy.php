<?php

namespace App\Services\Maintenance;

use App\Concretes\MaintenanceInterface;

abstract class AbstractMaintenanceFactroy
{
    abstract public function createMaintenance(): MaintenanceInterface; // return product

    public function proccess(array $data)
    {
        $maintenance = $this->createMaintenance();
        return $maintenance->handleRequest($data);
    }
}