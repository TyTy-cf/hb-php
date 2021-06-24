<?php

$file = 'https://pokeapi.co/api/v2/pokemon/1/';
$data = file_get_contents($file);
print_r($data);
echo '<br>';
foreach(json_decode($data) as $key => $value) {
    echo '<br>';
    print_r($key);
    print_r($value);
}