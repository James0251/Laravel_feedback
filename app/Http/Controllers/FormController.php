<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;

class FormController extends Controller
{
//    Чтобы получить все данные из формы, необходимо в параметрах функции указать
    public function submit(FeedbackRequest $request)
    {
//        $validation = $request->validate([
//            'name' => 'required|min:5|max:100',
//            'email' => 'required|email',
//        ]);
    }
}
