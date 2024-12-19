<?php

namespace App\Http\Requests\ProjectManagement;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'intitule' => ['required', 'string', 'max:255', Rule::unique('tasks', 'intitule')->ignore($this->route()->parameter('task'))],
            'description' => ['required', 'string', 'max:255'],
            'deadline' => ['required', 'date', 'after_or_equal:today'],
            'status' => ['string', 'max:255'],
        ];
    }
}
