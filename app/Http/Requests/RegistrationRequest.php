<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'login' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return[
            'login.required' => 'Поле не должно быть пустым', 
            'login.unique' => 'Такой пользователь уже зарегестрирован',
            'email.required' => 'Поле не должно быть пустым',
            'email.email' => 'Данные должны быть в форме Email, например user@mail.ru',
            'password.required' => 'Поле не должно быть пустым ',
            'password.min' => 'Пароль должно быть не менее 6 символов',

        ];
    }
}
