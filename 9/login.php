<?php
// Identifiants attendus
$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je'; // hash correspondant au mot de passe : "secret123"

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant = $_POST['identifiant'];
    $motdepasse = $_POST['motdepasse'];

    if ($identifiant === $identifiantEnregistre && password_verify($motdepasse, $motdepasseHash)) {
        echo "Connexion réussie ! Bienvenue, $identifiant.";
    } else {
        echo "Erreur : Identifiant ou mot de passe incorrect.";
    }
}
?>