<?php


Route::get('/', function () {
    return view('calendar');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//Обработчик для тестовой формы
Route::post('/contact/submit', function () {
    return "Okey";
//    Вызываю функцию name() только после того, как функция post будет завершена
})->name('contact-form');

//Обработчик для моей формы
Route::post('/about/submit', function () {
    return "Okey";
//    Вызываю функцию name() только после того, как функция post будет завершена
})->name('about-form');
