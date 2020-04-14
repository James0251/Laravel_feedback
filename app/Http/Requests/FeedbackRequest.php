<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'message' => 'required|min:5',
        ];
    }

//    Валидация
    public function messages()
    {
        return [
            'name.required' => 'Напишите Ваше имя.',
            'website.required' => 'Напишите Вашу электронную почту.',
            'website.email' => 'Проверьте правильность электронной почты.',
            'message.required' => 'Опишите Ваш вопрос.',
            'message.min' => 'Опишите Ваш вопрос более подробно.'
        ];
    }
}
