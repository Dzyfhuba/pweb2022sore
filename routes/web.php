<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', [CobaController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);

Route::post('/students', [StudentController::class, 'store']);
