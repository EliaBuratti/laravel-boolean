<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktail = Cocktail::first();
        return response()->json([
            'success' => true,
            'result' => $cocktail
        ]);
    }
}
