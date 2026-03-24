<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:4|max:255',
            'last_name' => 'required|string|min:4|max:255',
            'email' => 'required|email|string|min:4|max:255|',
            'position' => 'required',
            'status' => 'required',
            'salary' => 'required|decimal:0,2',
            'contracts.*.contract_type_id' => 'required|exists:contract_types,id',
            'contracts.*.started_at' => 'required|date',
            'contracts.*.ended_at' => 'nullable|date|after:contracts.*.start_date',
        ];
    }
}
