<?php

include_once('style.php');

class Artist
{
    private array $styles;

    public function getStyles(): array {
        return $this->styles;
    }

    public function addStyle(Style $style): void {
        // Si le Style en paramètre n'existe pas dans le tableau
        // Alors on l'ajoute
        if (!in_array($style, $this->styles)) {
            $this->styles[] = $style;
        }
    }

}