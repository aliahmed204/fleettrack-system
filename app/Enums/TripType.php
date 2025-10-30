<?php

namespace App\Enums;

enum TripType: string
{
    case LOCAL = 'local';
    case INTERCITY = 'intercity';
    case INTERNATIONAL = 'international';
}