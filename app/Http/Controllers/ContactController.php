<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

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

        $contact = new Contact();
//        Обращаемся к обьекту $contact, далее обращаемся к нужному полю name и в него мы будем устанавливать
//        $request, далее через функцию input мы получаем определенные значения
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

//        чтобы добавить значения в БД, необходимо обратиться к обьекту $contact и через него обратитьс
//        к функции save()
        $contact->save();

//        выполним переадресацию
        return redirect()->route('home')->with(session('success', 'Все данные успешно записаны в MySQL'));

    }
}
