<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CocktailsController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [CocktailsController::class, 'index']);

Route::view('login', 'login')->name('login');
Route::get('table', [CocktailsController::class, 'index'])->middleware('auth');

Route::post('login', function () {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('table');
    };

    return redirect('login');
});
