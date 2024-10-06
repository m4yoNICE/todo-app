<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', function () {
    return view('contact');
});