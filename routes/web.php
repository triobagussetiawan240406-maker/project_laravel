<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//menu home

Route::get('/home', function () {
    return view('home');
});

//menu about

Route::get('/about', function () {
    return view('about');
});

//menu blog

Route::get('/blog', function () {
    return view('blog');
});

//menu contact

Route::get('/contact', function () {
    return view('contact');
});