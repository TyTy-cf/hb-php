<?php

include_once 'PokemonRepository.php';

$repos = new PokemonRepository();

var_dump($repos->findByName('Drac'));
