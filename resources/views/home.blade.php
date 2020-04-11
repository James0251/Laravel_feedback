@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti fuga omnis repellat tempore temporibus. Dolorum explicabo, voluptas. Animi distinctio dolore dolorem dolorum eos, illo necessitatibus placeat saepe sed voluptate!</p>
@endsection


{{--Добавляем сюда боковую панель--}}
@section('aside')
{{--    возьмем все из секции 'aside' с помощью директивы @parent--}}
    @parent
    <p>Дополнительный текст</p>
@endsection
