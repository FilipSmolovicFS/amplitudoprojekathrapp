<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContractRequest extends FormRequest
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
            'contract_type_id' => 'required|exists:contract_types,id',
            'started_at' => 'required|date',
            'ended_at' => 'required|date|after:started_at',
            'contract-document'=> 'nullable|file|mimes:pdf|max:2048',
        ];
    }
}
