<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cocktail;

class CocktailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get(url: 'www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
        return $response->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $response = Http::post('https://www.thecocktaildb.com/api/json/v1/1/search.php', [
        //     's' => 'margarita']);

        // return $response->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cocktail = new Cocktail();
        $cocktail->idDrink = "180";
        $cocktail->strDrink = "Coca cola";
        $cocktail->strCategory = "Gaseosa";
        $cocktail->strAlcoholic = "Yes";
        $cocktail->strGlass = "Grand";
        $cocktail->strInstructions = "Solo se sirve";
        $cocktail->save();
        return response()->json("ok");
    }
    // public function update(Request $request, string $id)
    // {

    //     // $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . $idDrink);
    //     // $data = $response->json()['drinks'][0];
    //     // $dataUpdate = array_merge($data, $request->all());
    //     // $cocktail = new Cocktail;
    //     // $cocktail->id = "id";
    //     // $cocktail->instructions = 'preparado';
    //     // $cocktail->type = 'alcohol';
    //     // dd($cocktail);
    //     // $cocktail->save();
    //     // $resource = Resource::findOfFail($idDrink);
    //     // $resource = fill($dataUpdate);
    //     // $resource = save();

    //     return response()->json($data);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
