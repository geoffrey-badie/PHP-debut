<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['couleur'])) {
        $couleur = $_POST['couleur'];
        $couleurMin = strtolower($couleur);
        echo "<h1 style='color:$couleurMin'>Vous avez choisi la couleur $couleur</h1>";
    } else {
        echo "<p>Vous n'avez pas sélectionné de couleur.</p>";
    }
}
?>