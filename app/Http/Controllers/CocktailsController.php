<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailsController extends Controller
{
    public function index(){
        $response = Http::get(url: 'www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
        // $url = env('URL_SERVER_API', 'http:localhost:8000');
        // $response = Http::get($url.'/search.php?s=margarita');
         $data = $response->json();
         return view('drink', compact('data'));
    }
}
