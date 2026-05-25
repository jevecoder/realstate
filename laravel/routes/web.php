<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/home', function () {
    return view('welcome');
});

// Featured properties page (optional list page)
Route::get('/properties', [PropertyController::class, 'index']);

// Property details page (IMPORTANT)
Route::get('/properties/{id}', [PropertyController::class, 'show']);