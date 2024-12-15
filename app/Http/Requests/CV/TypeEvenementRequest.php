<?php

namespace App\Http\Requests\CV;

use Illuminate\Foundation\Http\FormRequest;

class TypeEvenementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'intitule' => 'required|string|between:3,64',
            'description' => 'required|string|between:4,255',
        ];
    }
}
