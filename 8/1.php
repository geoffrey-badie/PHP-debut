<?php
$chaine = "12,5,abc,32,-7,42";

$tableau = explode(',', $chaine);

foreach ($tableau as &$valeurs){
    $valeurs= intval($valeurs);
}
var_dump($tableau);
$min = min($tableau);
$max = max($tableau);
echo "Le minimum du tableau est $min <br>";
echo "Le maximum du tableau est $max"
?>