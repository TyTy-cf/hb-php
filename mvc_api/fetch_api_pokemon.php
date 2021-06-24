<?php


$file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30';
$data = file_get_contents($file);
$tabItemPokemon = [];
$arrayJson = json_decode($data);

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
