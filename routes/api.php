<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CocktailsController;
use App\Http\Controllers\ApiController;

Route::resource('drinks', CocktailsController::class)->except(['create', 'edit']);

Route::get('/cocktails', [ApiController::class, 'index']);

Route::post('/cocktails', [CocktailsController::class, 'update']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
