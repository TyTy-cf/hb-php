<?php

include_once '../model/PokemonRepository.php';
include 'checkSession.php';

$pokemons = PokemonRepository::getInstance()->getPokemons();
