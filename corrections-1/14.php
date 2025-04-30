<?php

$temperatures = [15, 17, 14, 20, 22, 19, 16];

// Calcule et affiche la température moyenne de la semaine
// Affiche également la température la plus haute et la plus basse
// Format : "Moyenne : 17.57°C | Max : 22°C | Min : 14°C"

$nb_tp = 0;
$sum_tp = 0;
$min = $temperatures[0];
$max = $temperatures[0];
foreach ($temperatures as $temperature) {
    // data pour la moyenne
    $nb_tp += 1;
    $sum_tp += $temperature;
    // min
    if ($temperature < $min) {
        $min = $temperature;
    }
    // max
    if ($temperature > $max) {
        $max = $temperature;
    }
}

// 7, 123, 14, 22
var_dump($nb_tp, $sum_tp, $min, $max);
echo( "Moyenne : " . $sum_tp/$nb_tp ."°C | Max : " . $max . "°C | Min : " . $min . "°C" );