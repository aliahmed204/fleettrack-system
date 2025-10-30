<?php

use App\Http\Controllers\Api\MaintenanceController;
use App\Http\Controllers\Api\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/maintenance/request', [MaintenanceController::class, 'store']);
Route::post('/trips/calculate', [TripController::class, 'calculate']);