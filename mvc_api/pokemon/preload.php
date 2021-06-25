<?php

include_once 'model/PokemonRepository.php';

PokemonRepository::getInstance();

header('location: view/index.php');
