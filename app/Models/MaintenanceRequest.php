<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\MaintenanceIssueType;
use App\Enums\MaintenanceStatus;

class MaintenanceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'issue_type',
        'description',
        'status'
    ];

    protected $casts = [
        'issue_type' => MaintenanceIssueType::class,
        'status' => MaintenanceStatus::class
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}