<?php

use App\Http\Controllers\api\ProjectsController;
use App\Http\Controllers\api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function(Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/projects', ProjectsController::class);
Route::apiResource('/tags', TagController::class);