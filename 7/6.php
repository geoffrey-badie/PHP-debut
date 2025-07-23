<?php
function afficherTable($nombre) {
    echo "Table de multiplication pour $nombre :<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$nombre x $i = " . ($nombre * $i) . "<br>";
    }
}

afficherTable(1);
echo "<br>";
afficherTable(2);
echo "<br>";
afficherTable(3);
echo "<br>";
afficherTable(4);
echo "<br>";
afficherTable(5);
echo "<br>";
afficherTable(6);
echo "<br>";
afficherTable(7);
echo "<br>";
afficherTable(8);
echo "<br>";
afficherTable(9);
echo "<br>";
afficherTable(10);
?>