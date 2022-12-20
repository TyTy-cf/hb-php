<?php

include_once 'EntityRepository.php';
include_once 'Pokemon.php';

/**
 * Class PokemonRepository.php
 *
 * @author Kevin Tourret
 */
class PokemonRepository extends EntityRepository
{

    public function findAll(): array
    {
        $query = $this->pdo->query('SELECT * FROM pokemon');
        return $query->fetchAll(PDO::FETCH_CLASS, Pokemon::class);
    }

    public function findById(int $id): Pokemon
    {
        $query = $this->pdo->prepare('SELECT * FROM pokemon WHERE id = ?');
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchObject(Pokemon::class);
    }


//        var_dump($pokemons);
//    }

}
