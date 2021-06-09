<?php

include_once('ChessPiece.php');

class Tower extends ChessPiece
{

    /**
     * Pawn constructor.
     */
    public function __construct(string $color)
    {
        parent::__construct($color, 'Tour', 'tour.png');
    }

    public function move(): void
    {
        echo 'Move de Tower';
    }
}