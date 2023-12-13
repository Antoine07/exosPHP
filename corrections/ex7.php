<?php

/**
 * 07 Exercice zip
 * Dans le mot suivant
 * Comptez le nombre de i
 * Puis comptez le nombre de chaque lettre
 */

$phrase = "Mississippi";

$letters = str_split($phrase);

$iOccurences = 0;
$lettersOccurences = [];
foreach ($letters as $char) {
    if ($char == 'i') $iOccurences++;
    if (!array_key_exists($char, $lettersOccurences)) {
        $lettersOccurences[$char] = 1;
    } else {
        $lettersOccurences[$char] = $lettersOccurences[$char] + 1;
    }
}

echo $iOccurences . "\n";
print_r($lettersOccurences);
