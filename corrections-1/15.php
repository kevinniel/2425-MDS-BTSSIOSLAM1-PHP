<?php
$eleve = [
    "nom" => "Sophie",
    "notes" => [
        "Maths" => ["note" => 16, "coef" => 4],
        "Français" => ["note" => 14, "coef" => 3],
        "Histoire" => ["note" => 12, "coef" => 2],
        "Sport" => ["note" => 18, "coef" => 1]
    ]
];

var_dump( $eleve["notes"]["Maths"]["note"] );

// 1 - Calcule la moyenne générale pondérée (note * coef)
// 2 - Affiche chaque ligne : "Maths (coef 4) : 16/20"
// 3 - Puis affiche : "Moyenne générale : 14.8/20"

// 1
// $total = 0;
// $total += $eleve["notes"]["Maths"]["note"] * $eleve["notes"]["Maths"]["coef"];
// $total += $eleve["notes"]["Français"]["note"] * $eleve["notes"]["Français"]["coef"];
// $total += $eleve["notes"]["Histoire"]["note"] * $eleve["notes"]["Histoire"]["coef"];
// $total += $eleve["notes"]["Sport"]["note"] * $eleve["notes"]["Sport"]["coef"];
// 148

// var_dump($total);

// $total = 0;
// foreach ($eleve["notes"] as $key => $value) {
//     var_dump($key, $value);
//     // $toto = Maths
//     // $toto = Français
//     // $toto = Histoire
//     // $toto = Sport
//     $total += $value["note"] * $value["coef"];
// }

// var_dump($total);