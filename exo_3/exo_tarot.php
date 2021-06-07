<?php

function createDeck(): array {
    $colors = ['Pique', 'Trèfle', 'Coeur', 'Carreau'];
    $values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'C', 'D', 'R'];
    $deck = [];
    foreach ($colors as $color) {
        foreach ($values as $value) {
            $deck[] = $value . ' ' .$color;
        }
    }
    // Ajout des atouts
    for($i = 1; $i <= 21; $i++) {
        $deck[] = 'A:' . $i;
    }
    $deck[] = 'Excuse';
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

/**
 * Distribue les cartes d'un jeu de tarot, uniquement pour 4 et 5 joueurs
 * @param int $nbPlayers
 * @param array $deck
 * @return array|null
 */
function dealCards(int $nbPlayers, array $deck): ?array {
    $iteratedPlayer = 0;
    $players = [];
    $doggo = [];
    while(count($deck) > 0) {
        // Le chien a 6 cartes à 4
        // Le chien a 3 cartes à 5
        while($iteratedPlayer < $nbPlayers) {
            if(!isset($players['Player ' . $iteratedPlayer])) {
                $players['Player ' . $iteratedPlayer] = [];
            }
            if ($nbPlayers == 4 && count($doggo) < 6
                || $nbPlayers == 5 && count($doggo) < 3
            ) {
                array_push($doggo[], ...drawCards($deck, 1));
            }
            array_push($players['Player ' . $iteratedPlayer], ...drawCards($deck, 3));
            $iteratedPlayer++;
        }
        $iteratedPlayer = 0;
    }
    $players['doggo'] = $doggo;
    return $players;
}

$deck = createDeck();
//print_r($deck);
echo '<br>';
echo '<br>';
$deck = shuffleDeck($deck);
print_r($deck);
echo '<br>';
echo '<br>';
//$hand = drawCards($deck, 6);
//echo '<br>';
//print_r($hand);
//echo '<br>';
//echo '<br>';
$playersHand = dealCards(5, $deck);

foreach($playersHand as $key => $hands) {
    echo 'Nom joueur : ' . $key . '<br>';
    foreach($hands as $card) {
        echo $card . '<br>';
    }
    echo '<br>';
}






