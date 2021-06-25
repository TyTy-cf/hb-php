<?php

include_once 'Pokemon.php';

class PokemonRepository
{

    /** @var Pokemon[] $pokemons */
    private array $pokemons;

    private static ?PokemonRepository $instance = null;

    public static function getInstance(): PokemonRepository {
        if (!isset(PokemonRepository::$instance) && !isset($_SESSION['pokemon_repository'])) {
            PokemonRepository::$instance = new PokemonRepository();
            $_SESSION['pokemon_repository'] = self::getInstance();
        } else if (isset($_SESSION['pokemon_repository'])) {
            PokemonRepository::$instance = $_SESSION['pokemon_repository'];
        }
        return PokemonRepository::$instance;
    }

    /**
     * PokemonRepository constructor.
     */
    private function __construct()
    {
        $this->findPokemonsFromApi();
    }

    public function getPokemons(): array {
        return self::$instance->pokemons;
    }

    private function findPokemonsFromApi(): void {
        $file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30';
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);
        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data, true);
            $types[] = $jsonPokemon['types'][0]['type']['name'];
            if (count($jsonPokemon['types']) > 1) {
                $types[] = $jsonPokemon['types'][1]['type']['name'];
            }
            $this->pokemons[] = new Pokemon(
                $jsonPokemon['name'],
                $jsonPokemon['sprites']['front_default'],
                $jsonPokemon['sprites']['other']['official-artwork']['front_default'],
                $jsonPokemon['order'],
                $types
            );
            $types = [];
        }
    }



}