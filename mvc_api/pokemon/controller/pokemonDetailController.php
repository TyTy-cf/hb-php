<?php

include_once '../model/PokemonRepository.php';
include 'checkSession.php';

if (!empty($_POST['pokemon'])) {
    $_SESSION['searchedPokemon'] = $_POST['pokemon'];
    header('location: ../view/pokemonDetail.php');
    exit;
}

if (isset($_GET['id'])) {
    $pokemon = PokemonRepository::getInstance()->getPokemonById($_GET['id']);
}

if (isset($_SESSION['searchedPokemon'])) {
    $pokemon = PokemonRepository::getInstance()->findPokemonFromName($_SESSION['searchedPokemon']);
    unset($_SESSION['searchedPokemon']);
}
