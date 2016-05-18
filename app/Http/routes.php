<?php

Route::get('/', function () {
    return view('home');
});

Route::get('signin', function () {
    return view('signin');
});



Route::post('login', ['uses' => 'LoginController@postLogin']);
