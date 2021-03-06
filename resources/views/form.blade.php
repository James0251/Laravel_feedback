@extends('layouts.app')

@section('title', 'Feedback Form')

{{--    Сделаем обработчик валидации--}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('feedback-form') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th class="name">Ваше имя:</th> <td class="point"><input type="text" name="name" size="35" > </td>
            </tr>
            <tr>
                <th class="name">Ваш телефон:</th> <td class="point"><input type="text" name="phone" size="35" ></td>
            </tr>
            <tr>
                <th class="name">Вы уже пользовались нашими услугами?</th> <td class="point"> Да:<input type="checkbox" value="Да" name="coll">  Нет:<input type="checkbox" value="Нет" name="coll"></td>
            </tr>
            <tr>
                <th class="name">Ваш e-mail:</th> <td class="point"> <input type="text" name="website" size="35" ></td>
            </tr>
            <tr>
                <th class="name">Выберите специалиста:</th> <td class="point">
                    <select name="priority" size="1">
                        <option value="spec1">Специалист 1</option>
                        <option value="spec2">Специалист 2</option>
                        <option value="spec3">Специалист 3</option>
                        <option value="spec4">Специалист 4</option>
                        <option value="spec5">Специалист 5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="name">Желаемая услуга:</th> <td class="point">
                    <select name="type" size="1">
                        <option value="service1">Услуга 1</option>
                        <option value="service2">Услуга 2</option>
                        <option value="service3">Услуга 3</option>
                        <option value="service4">Услуга 4</option>
                    </select> </td>
            </tr>
            <tr>
                <th class="name">Описание вопроса:</th> <td class="point"><textarea name="message" rows="8" cols="45"></textarea></td>
            </tr>
            <tr>
                <th class="name">Выберите месяц для записи:</th> <td class="point">
                    <select name="month" onchange="window.location.href=this.options[this.selectedIndex].value">
                        <option VALUE="http://localhost:8000?month=01">Январь</option>
                        <option VALUE="http://localhost:8000?month=02">Февраль</option>
                        <option VALUE="http://localhost:8000?month=03">Март</option>
                        <option VALUE="http://localhost:8000?month=04">Апрель</option>
                        <option VALUE="http://localhost:8000?month=05">Май</option>
                        <option VALUE="http://localhost:8000?month=06">Июнь</option>
                        <option VALUE="http://localhost:8000?month=07">Июль</option>
                        <option VALUE="http://localhost:8000?month=08">Август</option>
                        <option VALUE="http://localhost:8000?month=09">Сентябрь</option>
                        <option VALUE="http://localhost:8000?month=10">Октябрь</option>
                        <option VALUE="http://localhost:8000?month=11">Ноябрь</option>
                        <option VALUE="http://localhost:8000?month=12">Декабрь</option>
                    </select>
                </td>
            </tr>
            @if($selectedDate)
                <input type="hidden" name="day" value="{{ $selectedDate->format('d-F') }}">
                <input type="hidden" name="time" value="{{ $selectedDate->format('H:i') }}">
            <tr>
                <th class="name">Ваш приём назначен на: </th> <td class="point"><output><u>{{ $selectedDate->format('d-F'.' в '.'H:i') }}</u></output></td>
            </tr>

            @endif

            <tr>
                <td class="send" colspan=2 align="left"> <input type="reset" value="Очистить"><input type="submit" value="Отправить">
                </td></tr>
        </table>
    </form>


