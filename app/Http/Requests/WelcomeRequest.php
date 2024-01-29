<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WelcomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Imeto e zaduljitelno',
            'first_name.min' => 'Minimum 3 simvola'
        ];
    }
}
