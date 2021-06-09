<?php

include_once('Pawn.php');
include_once('Tower.php');
include_once('Queen.php');

$pawnW = new Pawn('Blanc');
$towerB = new Tower('Noir');
$queenW = new Queen('Blanc');

/** @var ChessPiece[] $board */
$board[] = $pawnW;
$board[] = $queenW;
$board[] = $towerB;

foreach ($board as $piece) {
    /** @var ChessPiece $piece */
    $piece->echoName();
    echo '<br>';
}

