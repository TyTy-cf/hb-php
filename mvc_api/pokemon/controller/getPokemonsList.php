<?php

include_once '../model/PokemonRepository.php';

$pokemons = PokemonRepository::getInstance()->getPokemons();
