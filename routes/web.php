<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\PathController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// DashBoard Route
Route::get('/dashboard', [Dashboard::class,'index']);

// Character Route
Route::resource('/dashboard/character',CharacterController::class);

// Element Route
Route::get('/dashboard/element/checkSlug',[ElementController::class,'checkSlug']);
Route::resource('/dashboard/element',ElementController::class);

// Path Route
Route::get('/dashboard/path/checkSlug',[PathController::class,'checkSlug']);
Route::resource('/dashboard/path',PathController::class);
