<?php
$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function calculerMoyenne($eleve) {
    $notes = array_slice($eleve, 1);
    return array_sum($notes) / count($notes);
}

function estAdmis($moyenne) {
    return $moyenne >= 10;
}

function afficherResultats($classe) {
    foreach ($classe as $eleve) {
        $moyenne = calculerMoyenne($eleve);
        $admis = estAdmis($moyenne);
        $messageAdmission = $admis ? "Admis" : "Non admis";
        echo "Prénom: " . $eleve["prenom"] . ", Moyenne: " . $moyenne . ", " . $messageAdmission . "<br>";
    }
}

afficherResultats($classe);
?>