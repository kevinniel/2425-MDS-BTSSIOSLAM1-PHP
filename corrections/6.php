<?php

// Parcourir le tableau `$etudiants` avec un `foreach`.
// Pour chaque étudiant :
// Calcule la moyenne de ses notes.
// Affiche :
// "Alice a une moyenne de 13.33."
// Si la moyenne est supérieure ou égale à 10, affiche :
// "Alice a validé l'année."
// Sinon, affiche : "Alice n'a pas validé l'année."
// Affiche un séparateur (echo "------";) entre chaque étudiant pour plus de lisibilité.

$etudiants = [
    [
        "prenom" => "Alice",
        "notes" => [15, 12, 13]
    ],
    [
        "prenom" => "Bob",
        "notes" => [8, 9, 10]
    ],
    [
        "prenom" => "Charlie",
        "notes" => [18, 17, 16]
    ]
];

foreach ($etudiants as $etudiant) {    
    echo("<br>");
    echo "------";
    $sum = 0;
    $nb_note = 0;
    foreach ( $etudiant["notes"] as $note ) {
        echo("<br>");
        echo("note : " . $note);
        $sum += $note;
        $nb_note += 1;
    }
    $moyenne = $sum / $nb_note;
    echo("<br>");
    echo($etudiant["prenom"] . " a une moyenne de " . $moyenne . ".");
    echo("<br>");
    if ($moyenne > 10) {
        echo($etudiant["prenom"] . " a validée son année.");
    } else {
        echo($etudiant["prenom"] . " n'a pas validée son année.");
    }
    echo("<br>");
    echo "------";
}