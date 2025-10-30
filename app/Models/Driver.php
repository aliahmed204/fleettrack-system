<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\DriverStatus;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'license_no',
        'status'
    ];

    protected $casts = [
        'status' => DriverStatus::class
    ];

    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Vehicle::class, 'driver_vehicle')
                    ->withPivot('assigned_at')
                    ->withTimestamps();
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }

    public function maintenanceRequests(): HasMany
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}