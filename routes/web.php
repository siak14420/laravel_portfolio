<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-view.home');
});

Route::get('/about', function () {
    return view('user-view.about');
});
