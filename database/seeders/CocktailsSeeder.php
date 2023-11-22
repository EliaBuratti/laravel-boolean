<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = config('cocktails.cocktails');



    foreach($cocktails as $cocktail) {
    
    $cocktail_path = $cocktail['drinks'][0];
    $ingredients = [];
    $measures = [];

    foreach($cocktail_path as $ingredient => $value) {

        if(preg_match('/strIngredient/', $ingredient) && $value ) {
            array_push($ingredients, $value);
        }
    }

    foreach($cocktail_path as $measure => $value) {

        if(preg_match('/strMeasure/', $measure) && $value ) {
            array_push($measures, $value);
        }
    }
            $new_cocktail = new Cocktail();

            $new_cocktail->name = $cocktail_path['strDrink'];
            $new_cocktail->category = $cocktail_path['strCategory'];
            $new_cocktail->alcholic = $cocktail_path['strAlcoholic'];
            $new_cocktail->glass = $cocktail_path['strGlass'];
            $new_cocktail->instructions = $cocktail_path['strInstructions'];
            $new_cocktail->thumb = $cocktail_path['strDrinkThumb'];
            $new_cocktail->ingredients = json_encode($ingredients);
            $new_cocktail->measures = json_encode($measures);          
            $new_cocktail->save();
        }
            

    }
        
    }

