<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'birthday' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable|starts_with:07,+964,00964',
            'image' => 'nullable',
            'city_id' => 'nullable',
            'stage_id' => 'nullable',
            'gender_id' => 'nullable',
        ];
    }
}
