<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', function () {
    return Inertia::render('Home');
});

Route::get('/{page}', function ($page) {
    return Inertia::render(ucfirst($page));
})->where('page', '.*');