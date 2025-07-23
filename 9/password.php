<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (strlen($password) < 6) {
        echo "Erreur : Le mot de passe est trop court. Il doit contenir au moins 6 caractères.";
    } elseif ($password !== $confirm_password) {
        echo "Erreur : Les deux mots de passe ne sont pas identiques.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo "Mot de passe chiffré : " . $hashed_password;
    }
}
?>