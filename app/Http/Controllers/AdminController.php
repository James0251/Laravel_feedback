<?php

namespace App\Http\Controllers;


use App\Models\Form;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function submit(Request $request)
    {
        dd($request->input('date_start_time'));
        dd($request->input('date_end_time'));
        dd($request->input('date_period'));
        $mondayString = "";
        $tuesdayString = "";
        $wednesdayString = "";
        $thursdayString = "";
        $fridayString = "";
        $saturdayString = "";
        $sundayString = "";
        for ($i=0; $i<=count($request->all())/2-1; $i++)
        {
            $dayArray[] = $request->all()['day' .$i];
            $timeArray[] = $request->all()['time' .$i];
        }

        $i=0;
        foreach($dayArray as $day)
        {
            ${$day . 'String'} .= '"' . $timeArray[$i] . '",';
            ++$i;
        }
        dd($mondayString);
//        $configPath = 'config.json';
//        $json = file_get_contents($configPath);
//
//        $dayNamesArray = [
//            'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'],
//            'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье']
//        ];
//
//        $json_array = json_decode($json, TRUE);
//        $date_start_time = strtotime($json_array['start_time']);
//        $date_end_time = strtotime($json_array['end_time']);
//        $date_period = (int) ($json_array['period']);
//        $availableTime = [];


//        $form->name = $request->input('name');
//        $form->phone = $request->input('phone');
//        $form->coll = $request->input('coll');
//        $form->email = $request->input('website');
//        $form->specialist = $specArray[$request->input('priority')];
//        $form->service = $typeArray[$request->input('type')];
//        $form->message = $request->input('message');
//        $form->date = $request->input('day');
//        $form->time = $request->input('time');

//
//        $form->save();
//
//        return redirect()->route('hoрme')->with(session('success', 'Все данные успешно записаны в MySQL'));
    }
}
