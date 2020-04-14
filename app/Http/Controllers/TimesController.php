<?php

namespace App\Http\Controllers;

use App\Models\Monday;
use App\Models\Thursday;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function monday(Request $request)
    {
        $day = $request->get('day', 1);
        $month = $request->get('month', 1);
        $mondays = Monday::all();

        return view('weekDays.monday', compact('day', 'month', 'mondays'));
    }

    public function thursday(Request $request)
    {
        $day = $request->get('day', 1);
        $month = $request->get('month', 1);
        $thursdays = Thursday::all();
        return view('weekDays.thursday', compact('day', 'month', 'thursdays'));
    }
}
