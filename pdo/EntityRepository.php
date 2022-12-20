<?php


/**
 * Class EntityRepository.php
 *
 * @author Kevin Tourret
 */
abstract class EntityRepository
{

    protected PDO $pdo;

    private string $dsn = 'mysql:host=127.0.0.1:3307;dbname=db-pokemon-manager-dev';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
    }

}
