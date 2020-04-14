@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <h1>Админ-панель</h1>
    <form action="{{ route('admin-form') }}" method="post">
        @csrf
        <div class="form-group">
            <?php

            $configPath = 'config.json';
            $json = file_get_contents($configPath);

            $dayNamesArray = [
                         'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'],
                         'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье']
                        ];

            $json_array = json_decode($json, TRUE);
            $date_start_time = strtotime($json_array['start_time']);
            $date_end_time = strtotime($json_array['end_time']);
            $date_period = (int) ($json_array['period']);
            echo '<input type="text" name="date_start_time" value="' .$date_start_time. '" size="1" style=\'display:none\'</input>';
            echo '<input type="text" name="date_end_time" value="' .$date_end_time. '" size="1" style=\'display:none\'</input>';
            echo '<input type="text" name="date_period" value="' .$date_period. '" size="1" style=\'display:none\'</input>';
            $availableTime = [];

            do{
                $availableTime[] = date('H:i', $date_start_time);
                $date_start_time+=$date_period*60;
            } while ($date_start_time<=$date_end_time);

            $fields = 0;
            for ($i =0; $i<7; $i++)
                {
                    dayOfWeek($json_array,$availableTime,$i,$dayNamesArray);
                }

            function dayOfWeek($json_array, $availableTime, $dayNumber, $dayNamesArray){
                $dayArray = $json_array[$dayNamesArray['en'][$dayNumber]];
                if ($dayArray[0] !== 0) $dayAvailable = true; else $dayAvailable = false;
                global $fields;
                if ($fields == 0)
                    {
                        $fields = 0;
                    }
                $i = 0;
                if ($dayAvailable === true)
                {
                    foreach ($dayArray as $time)
                    {
                        echo '<select name="day' .$fields. '" size=1>';
                        for($j=0;$j<7;$j++)
                            {
                                if ($dayNamesArray['en'][$j] === $dayNamesArray['en'][$dayNumber])
                                    {
                                        echo '<option value=' . $dayNamesArray['en'][$j] . ' selected=\"selected\">' . $dayNamesArray['ru'][$j] . '</option>';
                                    }
                                else
                                    {
                                        echo '<option value=' . $dayNamesArray['en'][$j] . '>' . $dayNamesArray['ru'][$j] . '</option>';
                                    }

                            }
                        echo '</select>';
                        echo '<select name="time' .$fields. '" size=1>';
                        ++$fields;
                        foreach ($availableTime as $value)
                        {
                            if ($dayArray[$i] === $value)
                            {
                                echo "<option value=\"$value\" selected=\"selected\">$value</option>";
                            }
                            else
                            {
                                echo "<option value=\"$value\">$value</option>";
                            }
                        }
                        echo '</select><br/>';
                        $i++;
                    }
                    $i=0;
                }
            }
            ?>
        </div>

        <button onclick="tap()" id="btn">Кнопка</button>
        <script type="text/javascript">
            btn.onclick = function tap() {

            }
        </script>

        <button type="submit" class="btn btn-success">Follow</button>
    </form>
@endsection







