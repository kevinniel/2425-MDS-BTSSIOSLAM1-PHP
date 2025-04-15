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
// var_dump( $array3[3][2] );

// if
// if( $a == "tata") {
//     return "tata";
// } elseif ($a == "toto") {
//     return "toto";
// } else {
//     return "tutu";
// }

// Boucles
// for 
for ($i=0; $i < 5; $i++) {
    // echo($i);
}

// foreach
foreach ($array1 as $case) {
    // echo($case);
}

foreach ($array2 as $key => $value) {
    // echo($key . " " . $value);
}


// fonctions

// une fonction c'est un bout de code qui peut être réutilisé n'importe quand.
// Elle a un nom et on l'appel quand on veut !

// Je déclare une fonction qui s'appelle "nom"
function nom() {
    // le code qui sera exécuter lorsque j'appellerai ma fonction
    echo("Je m'appelle Kévin");
}
// j'appelle ma fonction
// nom();
// nom();
// nom();
// nom();

// On n'a pas tous le même nom !

// on va créer une fonction avec des paramètres
function nom2($param1) {
    echo("Je m'appelle " . $param1);
}
// on appelle la fonction en lui donnant des arguments
// nom2("Kévin");
// nom2("Jean");
// nom2("Toto");





