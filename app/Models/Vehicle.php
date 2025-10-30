<?php

namespace App\Models;

use App\Enums\VehicleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'model',
        'status'
    ];

    protected $casts = [
        'status' => VehicleStatus::class
    ];

    // Many-to-Many relationship with drivers
    public function drivers(): BelongsToMany
    {
        return $this->belongsToMany(Driver::class, 'driver_vehicle')
                    ->withPivot('assigned_at')
                    ->withTimestamps();
    }

    // One-to-Many relationship with deliveries
    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    // Has-Many-Through relationship with trips via deliveries
    public function trips(): HasManyThrough
    {
        return $this->hasManyThrough(Trip::class, Delivery::class);
    }

    // One-to-Many relationship with trips
    public function directTrips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }

    // One-to-Many relationship with maintenance requests
    public function maintenanceRequests(): HasMany
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    // One-to-Many relationship with vehicle locations
    public function Locations(): HasMany
    {
        return $this->hasMany(VehicleLocation::class);
    }

}
