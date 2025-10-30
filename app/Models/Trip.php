<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\TripType;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'delivery_id',
        'type',
        'start_time',
        'end_time',
        'distance_km',
        'total_cost'
    ];

    protected $casts = [
        'type' => TripType::class,
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'distance_km' => 'decimal:2',
        'total_cost' => 'decimal:2'
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function delivery(): BelongsTo
    {
        return $this->belongsTo(Delivery::class);
    }
}