<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

// Use Laravel's resourceful routing for RecipeController
Route::resource('recipes', RecipeController::class);
