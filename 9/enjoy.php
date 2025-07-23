<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['interets']) && count($_POST['interets']) >= 2) {
        echo "<h1>Vos centres d'intérêt :</h1>";
        echo "<ul>";
        foreach ($_POST['interets'] as $interet) {
            echo "<li>" . htmlspecialchars($interet) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Erreur : Vous devez cocher au moins deux centres d'intérêt.</p>";
    }
}
?>