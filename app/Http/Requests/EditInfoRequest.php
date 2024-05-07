<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditInfoRequest extends FormRequest
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
            'name'=> '',
            'surname'=> '',
            'middle_name'=> '',
            'passport'=> '',
            'phone'=> '',
            'inn'=> '',
            'snils'=> '',
            
        ];
    }

    public function messages()
    {
        return [
            'passport.min'=> 'минимум 10',
            'phone.min'=> 'минимум 11',
            'inn.min'=> 'минимум 5',
            'snils.min'=> 'минимум 5',
        ];
    }
}
