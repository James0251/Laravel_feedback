@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Главная страница</h1>
    {{--    тут будем выводить сообщения об ошибках или правильных операциях--}}
    @include('inc.contact_messages')
@endsection


{{--Добавляем сюда боковую панель--}}
@section('aside')
{{--    возьмем все из секции 'aside' с помощью директивы @parent--}}
    @parent
    <p>Дополнительный текст</p>
@endsection

