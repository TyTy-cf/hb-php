<?php

function transform(string $string): string {
    $finalString = '';
    $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
    foreach(str_split($string) as $char) {
        $finalString .= $char;
        if (in_array($char, $vowels)) {
            $finalString .= 'fe'.$char;
        }
    }
    return $finalString;
}

print_r(transform('abce'));















