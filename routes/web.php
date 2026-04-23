<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post("/formsubmitted", function (Request $request) {
    $validated = $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|email',
    ]);
    
    return "Your fullname is {$request->input('fullname')} and your email is {$validated['email']}.";
})->name('formsubmitted');