<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Вы не указали Имя',
            'email.required' => 'Вы не указали электронную почту',
            'email.email' => 'Проверьте , правильно ли написана электронная почта',
            'subject.required' => 'Поле "Тема сообщения" является обязательным для заполнения',
            'message.required' => 'Поле "Текст сообщения" является обязательным для заполнения',

        ];
    }
}
