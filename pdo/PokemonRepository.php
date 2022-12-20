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

    public function findByName(string $name): array
    {
        $query = $this->pdo->prepare('SELECT * FROM pokemon WHERE name LIKE :name');
        $like = '%'.$name.'%';
        $query->bindParam(':name', $like);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Pokemon::class);
    }

    public function addPokemon(Pokemon $pokemon): Pokemon
    {
        $query = $this->pdo->prepare('INSERT INTO pokemon VALUE (null, ?, ?, ?)');
        $query->bindValue(1, $pokemon->getName());
        $query->bindValue(2, $pokemon->getWeight());
        $query->bindValue(3, $pokemon->getHeight());
        $query->execute();
        $this->pdo->lastInsertId();
        $pokemon->setId($this->pdo->lastInsertId());
        return $pokemon;
    }

//        var_dump($pokemons);
//    }

}
