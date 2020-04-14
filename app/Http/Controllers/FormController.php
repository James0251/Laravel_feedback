<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Form;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{
//    Чтобы получить все данные из формы, необходимо в параметрах функции указать
    public function submit(FeedbackRequest $request)
    {
        $form = new Form();

        $specArray = ["spec1" => "Специалист 1","spec2" => "Специалист 2","spec3" => "Специалист 3","spec4" => "Специалист 4","spec5" => "Специалист 5",];
        $typeArray = ['service1' => 'Услуга 1', 'service2' => 'Услуга 2', 'service3' => 'Услуга 3', 'service4' => 'Услуга 4',];

        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->coll = $request->input('coll');
        $form->email = $request->input('website');
        $form->specialist = $specArray[$request->input('priority')];
        $form->service = $typeArray[$request->input('type')];
        $form->message = $request->input('message');
        $form->date = $request->input('day');
        $form->time = $request->input('time');
//        dd($request);
//
        $form->save();
//
        return redirect()->route('home')->with(session('success', 'Все данные успешно записаны в MySQL'));
    }

}
