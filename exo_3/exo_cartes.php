<?php

function createDeck(): array {
    $colors = ['Pique', 'Trèfle', 'Coeur', 'Carreau'];
    $values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'D', 'R'];
    $deck = [];
    foreach ($colors as $color) {
        foreach ($values as $value) {
            $deck[] = $value . ' ' .$color;
        }
    }
    return $deck;
}

function shuffleDeck(array $deck): array {
    $deckShuffled = [];
    while (count($deck) > 0) {
        $index = rand(0, count($deck) - 1);
        $deckShuffled[] = $deck[$index];
        array_splice($deck, $index, 1);
    }
    return $deckShuffled;
}

function drawCards(array &$deck, int $nb): array {
    $hand = [];
    while ($nb > 0) {
        $hand[] = $deck[0];
        array_splice($deck, 0, 1);
        $nb--;
    }
    return $hand;
}

$deck = createDeck();
print_r($deck);
echo '<br>';
echo '<br>';
$deck = shuffleDeck($deck);
print_r($deck);
echo '<br>';
echo '<br>';
$hand = drawCards($deck, 7);
echo '<br>';
print_r($hand);
echo '<br>';
echo '<br>';
print_r($deck);





