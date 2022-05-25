<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', [CobaController::class, 'index']);
