<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculateTripCostRequest;
use App\Services\Trip\TripStrategyResolver;

class TripController extends Controller
{
    public function calculate(CalculateTripCostRequest $request)
    {
        $stratgy = TripStrategyResolver::resolve($request->validated()['type']);
        $data = $stratgy->calculate($request->validated());

        return response()->json($data);
    }
}
