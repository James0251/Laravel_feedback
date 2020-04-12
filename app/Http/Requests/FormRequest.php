<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required|numeric',
            'website' => 'required|email',
            'message' => 'max:500',
        ];
    }

//    Меняем текст для ошибок на русский
    public function messages()
    {
        return [
            'name.required' => 'Вы не указали Имя',
            'phone.required' => 'Вы не указали номер телефона',
            'phone.numeric' => 'Номер телефона нужно писать цифрами',
            'website.required' => 'Вы не указали электронную почту',
            'website.email' => 'Проверьте , правильно ли написана электронная почта',
        ];
    }
}
