<?php

namespace App\Http\Requests\CV;

use Illuminate\Foundation\Http\FormRequest;

class EvenementRequest extends FormRequest
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
            'intitule' => 'required|string|min:3|max:64',
            'etablissement' => 'required|string|min:3|max:64',
            'lieu' => 'required|string|min:3|max:64',
            'date_debut' => 'required|date',
            'date_fin' => 'date|nullable',
            'description' => 'required|string|min:3|max:255',
        ];
    }
}
