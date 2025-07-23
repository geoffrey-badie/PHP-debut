<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST['prenom'];

    if (empty($prenom)) {
        echo "Erreur : Le champ prénom est vide.";
    } else {
        echo "Bonjour " . htmlspecialchars($prenom) . " !";
    }
}
?>