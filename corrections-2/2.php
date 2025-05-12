<?php

$tableau = [25, 12, 9, 36, 18];
$n = count($tableau);

echo "Tableau initial : [" . implode(", ", $tableau) . "]\n";

// Tri par insertion
for ($i = 1; $i < $n; $i++) {
    $valeur = $tableau[$i];  // L'élément qu'on va insérer au bon endroit
    $j = $i - 1;

    // On décale les éléments plus grands que "valeur" vers la droite
    while ($j >= 0 && $tableau[$j] > $valeur) {
        $tableau[$j + 1] = $tableau[$j];
        $j--;
    }

    // On insère "valeur" à la bonne position
    $tableau[$j + 1] = $valeur;

    // Affichage de l'état du tableau après chaque insertion
    echo "Après insertion de l'élément $valeur : [" . implode(", ", $tableau) . "]\n";
}

echo "Tableau trié : [" . implode(", ", $tableau) . "]\n";
?>
