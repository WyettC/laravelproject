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

