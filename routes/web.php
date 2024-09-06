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

Route::get('/filter', function () {
    return view('filter');
})->name('filter');

Route::get('/darksave', function () {
    return view('darksave');
})->name('darksave');

Route::get('/darkfilter', function () {
    return view('darkfilter');
})->name('darkfilter');

Route::get('/darkbutton', function () {
    return view('darkbutton');
})->name('darkbutton');



