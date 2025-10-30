<?php

namespace App\Http\Requests;

use App\Enums\TripType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CalculateTripCostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'type' => ['required','string', Rule::in(array_column(TripType::cases(), 'value'))],
            'distance_km' => 'required|numeric|min:0',
            'duration_hours' => 'required|numeric|min:0',
        ];
    }
}
