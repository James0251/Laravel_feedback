<?php


use Illuminate\Http\Request;

Route::get('/', 'CalendarController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/submit', 'AdminController@submit')->name('admin-form');


Route::get('/home', function () {
    return view('home');
})->name('home');

//Роут для моей формы
Route::get('/form', function (Request $request) {
    $selectedDate = DateTime::createFromFormat('m-d H:i', sprintf('%s-%s %s', $request->get('month'), $request->get('day'), $request->get('time')));
    return view('form', compact('selectedDate'));
})->name('form');

//Роут для тестовой формы
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Обработчик для тестовой формы
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
//    Вызываю функцию name() только после того, как функция post будет завершена
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

//Обработчик для моей формы
Route::get('/form/all', 'FormController@allData')->name('feedback-data');
//    Вызываю функцию name() только после того, как функция post будет завершена
Route::post('/form/submit', 'FormController@submit')->name('feedback-form');


Route::get('/monday', 'TimesController@monday');
Route::get('/thursday', 'TimesController@thursday');

