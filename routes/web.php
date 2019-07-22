<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar/corredor', 'Runner\RunnerController@create')->name('runner.create');
Route::post('/criar/corredor', 'Runner\RunnerController@store')->name('runner.store');

Route::get('/criar/prova', 'Race\RaceController@create')->name('race.create');
Route::post('/criar/prova', 'Race\RaceController@store')->name('race.store');

Route::get('/criar/resultado', 'Result\ResultController@create')->name('result.create');
Route::post('/criar/resultado', 'Race\ResultController@store')->name('result.store');
