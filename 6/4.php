<?php
$temperatures = [30, 32, 34, 30, 35, 34, 31];

$moyenne = array_sum($temperatures) / count($temperatures);
echo "La température moyenne est de " . $moyenne . "\n";

echo "Le nombre de températures est de " . count($temperatures) . "\n";
?>
