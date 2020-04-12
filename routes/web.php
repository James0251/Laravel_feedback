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
//    Вызываю функцию name() только после того, как функция post будет завершена
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

//Обработчик для моей формы
//    Вызываю функцию name() только после того, как функция post будет завершена
Route::post('/form/submit', 'FormController@submit')->name('feedback-form');


Route::get('/monday', function (){
    return view('/weekDays/monday');
});
Route::get('/thursday', function (){
    return view('thursday');
});
