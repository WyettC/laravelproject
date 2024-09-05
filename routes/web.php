<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intern.dashboard');
});

Route::get('/save', function () {
    return view('save');
})->name('save');

Route::get('/button', function () {
    return view('button');
})->name('button');

Route::get('/search', function () {
    return view('search');
    });

Route::get('/pagination', function () {
    return view('pagination');
    });
