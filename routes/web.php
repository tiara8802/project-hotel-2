<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});