<?php
function calculImpots($revenu){
    if ($revenu < 10000) {
        return $revenu * 0;
    } elseif ($revenu < 20000) {
        return $revenu * 0.10;
    } elseif ($revenu < 35000) {
        return $revenu * 0.18;
    } elseif ($revenu < 50000) {
        return $revenu * 0.25;
    } else {
        return $revenu * 0.35;
    }
}

$revenus = [16000, 38000, 44000];
foreach ($revenus as $revenu) {
    $impot = calculImpots($revenu);
    echo "L'impôt sur un revenu de " . $revenu . "€ est de " . $impot . "€.";
}
?>