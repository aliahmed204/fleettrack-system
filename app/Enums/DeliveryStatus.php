<?php

namespace App\Enums;

enum DeliveryStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case DELIVERED = 'delivered';
    case CANCELLED = 'cancelled';
}