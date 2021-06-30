<?php
include_once '../model/Pokemon.php';
include_once '../model/Types.php';
include_once '../model/Stats.php';
include_once '../model/Abilities.php';


class PokemonRepository
{

    private array $pokemons;

    public static int $LIMIT_SEARCH = 15;

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
    public function __construct()
    {
        $this->pokemons = [];
        $this->findPokemonsByPage(1);
    }

    public function findPokemonFromName(string $name): ?Pokemon {
        foreach ($this->pokemons as $page => $pokemons) {
            foreach ($pokemons as $pokemon) {
                /** @var Pokemon $pokemon */
                if ($pokemon->getName() === $name) {
                    return $pokemon;
                }
            }
        }
        $data = file_get_contents('https://pokeapi.co/api/v2/pokemon/'.strtolower($name));
        $arrayJson = json_decode($data);
        return $this->createPokemonFromJson($arrayJson);
    }

    /**
     * @param int $page
     */
    private function findPokemonsByPage(int $page): void {
        $offset = ($page - 1) * PokemonRepository::$LIMIT_SEARCH;
        $file = 'https://pokeapi.co/api/v2/pokemon/?offset='.$offset.'&limit=' . PokemonRepository::$LIMIT_SEARCH;
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);
        $tmpArray = [];

        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data);
            $tmpArray[] = $this->createPokemonFromJson($jsonPokemon);
        }
        $this->pokemons[$page] = $tmpArray;
    }

    private function createPokemonFromJson(stdClass $jsonPokemon): Pokemon {
        $artwork = 'official-artwork';
        $types = [];
        $stats = [];
        $abilities = [];
        /** fetch Types */
        foreach($jsonPokemon->types as $type) {
            $types[] = new Types($type->type->name,'../asset/type-'.$type->type->name.'.png') ;
        }
        /** fetch Stats */
        foreach($jsonPokemon->stats as $stat){
            $stats[]= new Stats($stat->stat->name,$stat->base_stat);
        }
        /** fetch Ability */
        foreach ($jsonPokemon->abilities as $ability){
            $data2 = file_get_contents($ability->ability->url);
            $jsonEffect = json_decode($data2);
            $description = '';
            foreach ($jsonEffect->effect_entries as $descriptionAbility){
                if($descriptionAbility->language->name == 'en'){
                    $description = $descriptionAbility->effect;
                }
            }
            $abilities[]= new Abilities(
                ucfirst($ability->ability->name),
                $ability->is_hidden,
                $description
            );
        }
        $order = $jsonPokemon->order;
        if ($order < 10){
            $order = '#00'.$order;
        } elseif ($order < 100){
            $order = '#0'.$order;
        } else {
            $order = '#' . $order;
        }
        return new Pokemon(
            $jsonPokemon->id,
            ucfirst($jsonPokemon->name),
            $jsonPokemon->sprites->front_default,
            $jsonPokemon->sprites->other->$artwork->front_default,
            $order,
            $types,
            $stats,
            $abilities
        );
    }

    /**
    * SELECT * FROM pokemon;
     * @param int $page
    * @return Pokemon[]
    */
    public function getPokemonsByPage(int $page): array {
        if (!isset($this->pokemons[$page])) {
            $this->findPokemonsByPage($page);
        }
        return $this->pokemons[$page];
    }

    /**
     * @param int $id
     * @return Pokemon|null
     */
    public function getPokemonById(int $id): ?Pokemon {
        $pageSearchPokemon = ceil($id / PokemonRepository::$LIMIT_SEARCH);
        foreach ($this->pokemons[$pageSearchPokemon] as $pokemon) {
            if ($pokemon->getId() === $id) {
                return $pokemon;
            }
        }
        return null;
    }

    private function getPokemons(): array {
        return $this->pokemons;
    }

}
