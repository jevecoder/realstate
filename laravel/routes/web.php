<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


Route::get('/home', function () {
    return view('welcome');
});

// Featured properties page (optional list page)
Route::get('/properties', [PropertyController::class, 'index']);

// Property details page (IMPORTANT)
Route::get('/properties/{id}', [PropertyController::class, 'show']);


Route::get('/agents', [AgentController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/properties', [AdminController::class, 'properties']);
Route::get('/admin/agents', [AdminController::class, 'agents']);
Route::get('/admin/inquiries', [AdminController::class, 'inquiries']);