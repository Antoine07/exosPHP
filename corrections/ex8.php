<?php

/**
 * Exercice 8
 * Calculer la moyenne des valeurs suivante , pensez à les ranger dans un tableau associatif
 * 
 * Alan 13
 * Sandrine 17
 * Claire 18
 * Romain 14
 * Antoine 13
 * Sophie 18.5
 * 
 * Et afficher le résulta dans un text avec une moyenne arrondi; utiliser la fonction round() 
 */

$students = [
    'Alan' => 13,
    'Sandrine' => 17,
    'Claire' => 18,
    'Romain' => 14,
    'Antoine' => 13,
    'Sophie' => 18.5
];


$sum = 0;
foreach ($students as $student) {
    $sum += $student;
}

$len = count($students);

$average = round($sum / $len, 1);
echo "La moyenne de nos étudiants est $average" . "\n";
