<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CocktailsController;


Route::get('/', [CocktailsController::class, 'index']);

// Route::get('/', function () {
//     $response = Http::get('www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
//     return $response;
// });
