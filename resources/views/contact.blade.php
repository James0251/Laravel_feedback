@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <h1>Страница контактов</h1>



    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя: </label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения: </label>
            <input type="text" name="subject" placeholder="Тема сообщения: " id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Текст сообщения: </label>
            <textarea type="text" name="message" placeholder="Введите текст сообщения" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
