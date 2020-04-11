<?php


Route::get('/', function () {
    return view('calendar');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

//Роут для моей формы
Route::get('/form', function () {
    return view('form');
})->name('form');

//Роут для тестовой формы
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Обработчик для тестовой формы
Route::post('/contact/submit', function () {
    dd(Request::all());
//    Вызываю функцию name() только после того, как функция post будет завершена
})->name('contact-form');

//Обработчик для моей формы
Route::post('/form/submit', function () {
    dd(Request::all());
//    Вызываю функцию name() только после того, как функция post будет завершена
})->name('feedback-form');
