<?php

namespace App\Enums;

enum MaintenanceIssueType: string
{
    case ENGINE = 'engine';
    case TIRES = 'tires';
    case ELECTRICAL = 'electrical';
}