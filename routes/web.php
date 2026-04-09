<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('company');
    })->name('company');

    Route::get('/organization', function () {
        return view('organization');
    })->name('organization');
});