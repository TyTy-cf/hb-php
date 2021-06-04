<?php

function truncate($string) {
    // fonction strlen : permet de connaître la taille d'une chaine de caractères
    if (strlen($string) > 15) {
        // substr : permet de récupérer une chaîne de caratères
        // à partir de 'offset' jusqu'à 'length' (2ème et 3ème aregument)
        $string = substr($string, 0, 15) . '...';
    }
    return $string;
}

print_r(truncate('Lorem'));
