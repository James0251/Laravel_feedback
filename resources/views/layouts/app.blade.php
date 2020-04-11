<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    Указываем заголовки в дочерних файлах--}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
{{--Создаем шапку сайта--}}
@include('inc.header')

{{--Блок презентаций из inc/hero.blade.php --}}
{{--Условие @if для отображения только на главной страничке--}}
@if(Request::is('/home'))
    @include('inc.hero')
@endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                {{--устанавливаем связь с дочерними файлами для добавления данных в <body>--}}
                @yield('content')
            </div>
{{--            Див для боковой панели--}}
            <div class="col-4">
                {{--Вставляем боковую панель из /inc/aside.blade.php --}}
                @include('inc.aside')
            </div>
        </div>
    </div>




</body>
</html>
