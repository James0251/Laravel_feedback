<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        echo "<b>Выберите нужный день приёма:  </b><br/><br/>";
// Вычисляем число дней в текущем месяце
        $month = $request->get('month', '01');
        //$month = explode('=',"$_SERVER[REQUEST_URI]");
        $testdate = new DateTime(date('Y') . "-" . $month . '-01T12:00:00.000000Z');
        $dayofmonth = date('t',date_timestamp_get($testdate));


// Счётчик для дней месяца
        $day_count = 1;
// 1. Первая неделя
        $num = 0;
        for($i = 0; $i < 7; $i++)
        {
            // Вычисляем номер дня недели для числа
            $dayofweek = date('w',
                mktime(0, 0, 0, $month, $day_count, date('Y')));
            // Приводим к числа к формату 1 - понедельник, ..., 6 - суббота
            $dayofweek = $dayofweek - 1;
            if($dayofweek == -1) $dayofweek = 6;
            if($dayofweek == $i)
            {
                // Если дни недели совпадают, заполняем массив $week числами месяца
                $week[$num][$i] = $day_count;
                $day_count++;
            }
            else
            {
                $week[$num][$i] = "";
            }
        }
// 2. Последующие недели месяца
        while(true)
        {
            $num++;
            for($i = 0; $i < 7; $i++)
            {
                $week[$num][$i] = $day_count;
                $day_count++;
                // Если достигли конца месяца - выходим из цикла
                if($day_count > $dayofmonth) break;
            }
            // Если достигли конца месяца - выходим из цикла
            if($day_count > $dayofmonth) break;
        }
// 3. Выводим содержимое массива $week в виде календаря Выводим таблицу
        echo "<table style='width: 345px' border=1>";
        $day_array = [ 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        for($i = 0, $iMax = count($week); $i < $iMax; $i++)
        {
            echo "<tr>";
            for($j = 0; $j < 7; $j++)
            {
                if(!empty($week[$i][$j]))
                {
                    if ($j == 0){$monday[] = $week[$i][$j];} else if ($j == 3){$thursday[] = $week[$i][$j];}
                    // Если имеем дело с субботой и воскресенья подсвечиваем их
                    if($j == 5 || $j == 6 || $j == 4 || $j == 2 || $j == 1)
                        echo "<td style='color: gray; text-align: center'>".$week[$i][$j]."</td>";
                    else{
                        // Получаем и день и месяц этого дня
                        echo "<td style='text-align: center'><a href=\"http://localhost:8000/$day_array[$j]/?month=$month&day={$week[$i][$j]}\">".$week[$i][$j]."</a></td>";
                    }
                }
                else echo "<td>&nbsp;</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <a href="/form"><button type="submit">Back</button></a>
        <?php
        return view('calendar');
    }
}
