<?php

$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$phrase = "BONJOUR";

// Créé une fonction crypto qui décalle chaque lettre de +2 par rapport à l'alphabet.
// Vous avez la fonction strlen() pour récupérer la longueur d'une chaîne de charactère.
function crypto($letter, $alphabet, $decal = 2)
{
    $len = strlen($alphabet);
    for ($i = 0; $i < $len; $i++) {
        if ($letter == $alphabet[$i]) {
            return $alphabet[($i + $decal) % $len];
        }
    }
    // ($i + 2) % strlen($alphabet)
}

$tmpPhrase = [];
foreach (str_split($phrase) as $char) {
    $tmpPhrase[] = crypto($char, $alphabet);
}
echo implode($tmpPhrase) . "\n";
