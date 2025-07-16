<?php
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

echo $villes[4] . "\n";
echo "<br>";
$villes[0] = "Nice";

$villes[] = "Reims";

echo "Nombre de villes : " . count($villes) . "\n";
echo "<br>";

foreach ($villes as $ville) {
    echo $ville . "\n";
}
?>