<?php


$file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30';
$data = file_get_contents($file);
$tabItemPokemon = [];
$arrayJson = json_decode($data);

// json_decode vous renvoit un stdClass, autrement dit vous pouvez accéder aux attributs de votre objet
// Directement avec une -> comme pour un objet normal
// Par contre, il vous renverra une erreur si le nom d'attribut n'existe pas
// Il faut donc bien anaylser l'api
foreach ($arrayJson->results as $value) {
    echo '<br>';
    $data = file_get_contents($value->url);
    $jsonPokemon = json_decode($data);
    echo $jsonPokemon->name;
    echo ' - #';
    echo $jsonPokemon->order;
    echo ' - ';
    echo $jsonPokemon->sprites->front_default;

//    if($key == 'results'){
//        foreach ($value as $itemPokemon=> $propertyPokemon){
//            $propertyPokemon->
//            $tabItemPokemon [] = [
//                $propertyPokemon->name,
//
//            ]
//            }
//            }
////    }
}
