<?php

function organiserEtTrierEnPaires(array $tableau): array {
    // Étape 1 : Trier le tableau pour faciliter la création des paires
    sort($tableau); // Résultat : tableau trié

    $paires = [];
    $n = count($tableau);

    // Étape 2 : Former les paires (a, b) où a < b
    for ($i = 0; $i < $n; $i += 2) {
        $a = $tableau[$i];
        $b = $tableau[$i + 1];
        $paires[] = [$a, $b];
    }

    // Étape 3 : Trier les paires par ordre croissant du premier élément
    usort($paires, function($p1, $p2) {
        return $p1[0] <=> $p2[0];
    });

    // Étape 4 : Aplatir les paires dans un seul tableau
    $résultat = [];
    foreach ($paires as $paire) {
        $résultat[] = $paire[0];
        $résultat[] = $paire[1];
    }

    return $résultat;
}

// Exemple d'utilisation
$entrée = [8, 1, 3, 6, 2, 7, 5, 4];
$sortie = organiserEtTrierEnPaires($entrée);

echo "Résultat : [" . implode(", ", $sortie) . "]\n";
