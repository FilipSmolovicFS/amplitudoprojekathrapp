<?php

namespace App\Http\Requests;

use App\Rules\JMBGRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'phone_number' => 'required|min:11|max:20',
            'date_of_birth' => 'required|date',
            'jmbg' =>  [
                'required',
                'string',
                'size:13',
                new JMBGRule()
            ],
            'address' => 'required|string|min:4|max:255',
            'gender' => 'required',
            'contracts.*.contract_type_id' => 'required|exists:contract_types,id',
            'contracts.*.started_at' => 'required|date',
            'contracts.*.ended_at' => 'nullable|date|after:contract-type.*.start_date',
            'contracts.*.document' => 'required|file|mimes:pdf|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.min' => 'First name must be at least 4 characters.',
            'last_name.min' => 'Last name must be at least 4 characters.',
            'contract-type.*.ended_at.after' => 'The end date must be after the start date.',
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $contracts = $this->input('contract-type', []);

            foreach ($contracts as $index => $contract) {
                $startedAt = $contract['started_at'] ?? null;
                $endedAt = $contract['ended_at'] ?? null;

                if ($startedAt && $endedAt && $endedAt <= $startedAt) {
                    $validator->errors()->add(
                        "contract-type.$index.ended_at",
                        'The end date must be after the start date.'
                    );
                }
            }
        });
    }
}
