<?php

namespace App\Http\Requests;

use App\Enums\MaintenanceIssueType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMaintenanceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vehicle_id'  => ['required', 'exists:vehicles,id'],
            'issue_type'  => ['required', 'string', Rule::in(array_column(MaintenanceIssueType::cases(), 'value'))],
            'description' => ['required', 'string']
        ];
    }
}
