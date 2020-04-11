<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
//    Чтобы получить все данные из формы, необходимо в параметрах функции указать
    public function submit(Request $request)
    {
//        dd($request);   //ВСЕ данные из формы
//        dd($request->input('name'));   //обращаемся к $request, обращаемся к методу input() который позволяет получить
                                         //определенный параметр
    }
}
