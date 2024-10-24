<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// http://localhost:8000☝

Route::get('/index', function () {
    return view('index');
});
// http://localhost:8000/index☝