<?php

namespace App\Http\Requests\CV;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompetenceRequest extends FormRequest
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
            'intitule' => ['required', 'string', Rule::unique('competences')->ignore($this->skill)],
            'description' => 'required|string|between:1,255',
            'priorite' => 'required|integer|between:1,10',
        ];
    }
}
