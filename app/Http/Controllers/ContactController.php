<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
//    Чтобы получить все данные из формы, необходимо в параметрах функции указать
    public function submit(ContactRequest $request)
    {
//        dd($request);   //ВСЕ данные из формы
//        dd($request->input('name'));   //обращаемся к $request, обращаемся к методу input() который позволяет получить
                                         //определенный параметр

//        Валидация данных
//        $validation = $request->validate([
//            'subject' => 'required|min:5|max:100',
//            'message' => 'required|min:5|max:255',
//        ]);

//        Для валидации создал ContactRequest в папке app/Http/Requests

    }
}
