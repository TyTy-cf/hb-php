<?php

include_once('ChessPiece.php');

class Pawn extends ChessPiece
{

    /**
     * Pawn constructor.
     */
    public function __construct(string $color)
    {
        parent::__construct($color, 'Pion', 'pion.png');
    }

    public function move(): void
    {
        echo 'Move du Pawn';
    }

    public function echoName(): void
    {
        echo 'Je suis un Pawn, classe fille de ChessPiece';
    }

}