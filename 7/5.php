<?php
function afficherNombres($debut, $fin, $pair = true) {
    for ($i = $debut; $i <= $fin; $i++) {
        if ($pair && $i % 2 == 0) {
            echo $i . " ";
        } elseif (!$pair && $i % 2 != 0) {
            echo $i . " ";
        }
    }
}

echo "Nombres pairs de 7 à 99 :<br>";
afficherNombres(7, 99, true);

echo "<br>Nombres impairs de 59 à 169 :<br>";
afficherNombres(59, 169, false);
?>