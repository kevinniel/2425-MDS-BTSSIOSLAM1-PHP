<?php

$tableau = [29, 10, 14, 37, 13];
$n = count($tableau);

echo "Tableau initial : [" . implode(", ", $tableau) . "]\n";

// Tri à bulle
for ($i = 0; $i < $n - 1; $i++) {
    $echangé = false;

    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($tableau[$j] > $tableau[$j + 1]) {
            // Échange des éléments
            $temp = $tableau[$j];
            $tableau[$j] = $tableau[$j + 1];
            $tableau[$j + 1] = $temp;
            $echangé = true;
        }
    }

    echo "Passage " . ($i + 1) . " : [" . implode(", ", $tableau) . "]\n";

    // Optimisation : on arrête si aucun échange
    if (!$echangé) {
        break;
    }
}

echo "Tableau trié : [" . implode(", ", $tableau) . "]\n";
?>