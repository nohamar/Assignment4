<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes', [RecipeController::class, 'store']);
Route::get('/recipes/{name}', [RecipeController::class, 'show']);
Route::get('/recipes/{name}/edit', [RecipeController::class, 'edit']);
Route::put('/recipes/{oldname}', [RecipeController::class, 'update']);
Route::delete('/recipes/{name}', [RecipeController::class, 'destroy']);
