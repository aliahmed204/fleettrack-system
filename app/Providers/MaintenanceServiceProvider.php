<?php

namespace App\Providers;

use App\Services\Maintenance\EngineMaintenanceFactory;
use App\Services\Maintenance\TiresMaintenanceFactory;
use App\Services\Maintenance\ElectricalMaintenanceFactory;
use Illuminate\Support\ServiceProvider;

class MaintenanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // we can bind dynamically in the factory — but let’s preload for clarity
        $this->app->bind('engine.maintenance', EngineMaintenanceFactory::class);
        $this->app->bind('tires.maintenance', TiresMaintenanceFactory::class);
        $this->app->bind('electrical.maintenance', ElectricalMaintenanceFactory::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
