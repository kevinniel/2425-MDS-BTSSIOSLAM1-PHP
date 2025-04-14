<?php 

// déclaration d'une variable & utilisation : 
$toto;
$tata = 3;
// echo($tutu = "tutu");

// opérations = pareil que partout

// concaténation : avec un "point" : .
$concat = "toto" . " " . "tata";
// affiche : toto tata

// comparaison = pareil que partout
// == : comparaison des valeurs
1 == "1"; // vrai
// === : comparaison valeur + type
1 === "1"; // faux

// tableaux
$array1 = [
    1, // 0 => 1
    2, // 1 => 2
    3, // 2 => 3
    4, // 3 => 4
    5  // 4 => 5
];
$array2 = [
    1 => "a",
    2 => "b",
    3 => "c",
    4 => "d"
];
$array3 = [
    1,
    2,
    3 => [
        "john",
        "doe",
        12
    ]
];

// Accéder au chiffre "3" de array1
$array1[2];
// Accéder au chiffre "5" de array1
$array1[4];
// Accéder au chiffre "12" de array3
var_dump( $array3[3][2] );

// if
if( $a == "tata") {
    return "tata";
} elseif ($a == "toto") {
    return "toto";
} else {
    return "tutu";
}

// Boucles
// for 
for ($i=0; $i < 5; $i++) {
    echo($i);
}

// foreach
foreach ($array1 as $case) {
    echo($case);
}

foreach ($array2 as $key => $value) {
    echo($key . " " . $value);
}

