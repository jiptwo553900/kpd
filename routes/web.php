<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('welcome');
});
