<?php

namespace App\Enums;

enum VehicleStatus: string
{
    case ACTIVE = 'active';
    case UNDER_MAINTENANCE = 'under_maintenance';
    case INACTIVE = 'inactive';
}