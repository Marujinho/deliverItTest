<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar/corredor', 'Runner\RunnerController@create')->name('runner.create');
Route::post('/criar/corredor', 'Runner\RunnerController@store')->name('runner.store');

Route::get('/criar/prova', 'Race\RaceController@create')->name('race.create');