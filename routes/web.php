<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
//use App\Http\Controllers\CocktailsController;
use App\Http\Controllers\Api\CocktailsController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [CocktailsController::class, 'index']);
Route::post('/save-drink', [CocktailsController::class, 'save'])->name('save.drink');
Route::view('login', 'login')->name('login');
// Route::get('table', [CocktailsController::class, 'index'])->middleware('auth');
Route::get('/table', function () {
    $response = Http::get(url: 'www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
    $data = $response->json();
    return view('table', compact('data'));
});

Route::post('/login', function () {
    $credentials = request()->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     request()->session()->regenerate();
    //     return redirect('table');
    // };

    return redirect('/table');
});
