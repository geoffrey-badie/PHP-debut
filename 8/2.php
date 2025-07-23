<?php
$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];

$erreurs = [];

foreach ($form as $champ => $valeur) {
    if (!isset($valeur) || empty(trim($valeur))) {
        $erreurs[$champ] = "Le champ $champ est vide ou non défini.";
    }
}

if (isset($form['age']) && (!is_numeric($form['age']) || $form['age'] <= 0)) {
    $erreurs['age'] = "L'âge doit être un nombre supérieur à 0.";
}

if (empty($erreurs)) {
    echo "valide";
} else {
    foreach ($erreurs as $erreur) {
        echo $erreur . "<br>";
    }
}
?>