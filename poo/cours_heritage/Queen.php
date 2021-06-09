<?php

include_once('ChessPiece.php');

class Queen extends ChessPiece
{

    /**
     * Pawn constructor.
     */
    public function __construct(string $color)
    {
        parent::__construct($color, 'Reine', 'reine.png');
    }

    public function move(): void
    {
        echo 'Move de la Queen';
    }
}