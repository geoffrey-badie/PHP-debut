<?php
const TAUX_TVA = 0.2;
$prixHT = "5";
$prixTTC = (($prixHT * TAUX_TVA) + $prixHT);

echo $prixTTC;
?>