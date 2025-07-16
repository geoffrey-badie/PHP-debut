<?php
$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

foreach ($commandes as $commande) {
    $montant_ttc = $commande["montant_ht"] * 1.20;
    echo "Commande de " . $commande["client"] . " : " . $commande["montant_ht"] . " € HT, " . $montant_ttc . " € TTC – Statut: " . $commande["statut"] . "\n";
    echo "<br>";
}

$ca_ht = 0;
$ca_ttc = 0;
foreach ($commandes as $commande) {
    $ca_ht += $commande["montant_ht"];
    $ca_ttc += $commande["montant_ht"] * 1.20;
}

echo "Le chiffre d'affaires Hors Taxes est égal à " . $ca_ht . " €\n";
echo "<br>";
echo "Le chiffre d'affaires Toutes Taxes Comprises est égal à : " . $ca_ttc . " €\n";
echo "<br>";

$montant_non_regle = 0;
foreach ($commandes as $commande) {
    if ($commande["statut"] == "en attente") {
        $montant_non_regle += $commande["montant_ht"];
    }
}

$pourcentage_non_regle = ($montant_non_regle / $ca_ht) * 100;

echo "Le montant du chiffre d'affaires non réglé est de " . $montant_non_regle . " €\n";
echo "<br>";
echo "Le pourcentage du chiffre d'affaires non réglé est de " . number_format($pourcentage_non_regle, 2) . "%\n";
?>