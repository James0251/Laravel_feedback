<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Навигация</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ route('home') }}" class="p-2 text-dark">Главная</a>
        <a class="p-2 text-dark" href="{{ route('form') }}" class="p-2 text-dark">Моя форма</a>
        <a class="p-2 text-dark" href="{{ route('contact') }}" class="p-2 text-dark">Тестовая форма</a>
        <a class="p-2 text-dark" href="{{ route('contact-data') }}" class="p-2 text-dark">Сообщения</a>
        <a class="p-2 text-dark" href="{{ route('admin-form') }}" class="p-2 text-dark">Админка</a>

{{--   все поля {{ route('') }} были такого вида: /contact--}}

    </nav>
</div>
