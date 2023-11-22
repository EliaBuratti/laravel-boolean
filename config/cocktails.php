<?php

$cocktails = [];


//loop for get cocktails
for ($i = 0; $i < 3; $i++) {
    $cocktail_url = 'https://www.thecocktaildb.com/api/json/v1/1/random.php';
    $coctailContent = file_get_contents($cocktail_url);
    $cocktailEncode = json_decode($coctailContent, true);
    array_push($cocktails, $cocktailEncode);
}
//dd($cocktails);
