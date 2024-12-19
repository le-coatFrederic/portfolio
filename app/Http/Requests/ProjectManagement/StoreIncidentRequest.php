<?php

namespace App\Http\Requests\ProjectManagement;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncidentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'intitule' => ['required', 'string', 'max:255', Rule::unique('incidents', 'intitule')->ignore($this->route()->parameter('incident'))],
            'description' => ['required', 'string', 'max:255'],
        ];
    }
}
