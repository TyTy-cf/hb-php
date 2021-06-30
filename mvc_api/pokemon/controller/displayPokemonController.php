<?php

include_once '../model/PokemonRepository.php';
include 'checkSession.php';

//$_SESSION = [];
//session_destroy();

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
    $_SESSION['page'] = $currentPage;
} else if (isset($_SESSION['page'])) {
    $currentPage = $_SESSION['page'];
} else {
    $currentPage = 1;
}

$pokemons = PokemonRepository::getInstance()->getPokemonsByPage($currentPage);

$previousPage = 0;
$nextPage = 0;
if ($currentPage > 1) {
    $previousPage = $currentPage - 1;
}
$nextPage = $currentPage + 1;

