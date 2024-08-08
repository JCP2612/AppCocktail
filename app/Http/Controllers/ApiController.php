<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('www.thecocktaildb.com/api/json/v1/1/search.php?s=');
        $data = $response->json();

        return response()->json($data);
    }

    // public function update()
    // {
    //     $response = Http::patch(`www.thecocktaildb.com/api/json/v1/1/lookup.php?i={$idDrink}`);
    //     $data = $response->json();

    //     return response()->json();
    // }
}
