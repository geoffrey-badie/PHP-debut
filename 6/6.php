<?php
$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

foreach ($eleves as $nom => $notes) {
    $moyenne = array_sum($notes) / count($notes);
    echo "$nom a une moyenne de $moyenne. ";

    if ($moyenne < 10) {
        echo "Appreciation: Echec\n";
    } elseif ($moyenne >= 10 && $moyenne < 12) {
        echo "Appreciation: Peut mieux faire\n";
    } elseif ($moyenne >= 12 && $moyenne < 15) {
        echo "Appreciation: Bon travail\n";
    } else {
        echo "Appreciation: Excellent\n";
    }
}

$moyennesMatiere = ["maths" => [], "francais" => [], "anglais" => []];

foreach ($eleves as $notes) {
    foreach ($notes as $matiere => $note) {
        $moyennesMatiere[$matiere][] = $note;
    }
}

foreach ($moyennesMatiere as $matiere => $notes) {
    $moyenneMatiere = array_sum($notes) / count($notes);
    echo "La moyenne de la classe en $matiere est : $moyenneMatiere\n";
}
?>