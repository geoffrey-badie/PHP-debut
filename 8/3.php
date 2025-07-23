<?php
$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";

$couples = explode(',', $panier);

$produitsValides = [];

foreach ($couples as $couple) {
    $parts = explode(":", $couple);
    if (count($parts) == 2) {
        $nom = trim($parts[0]);
        $prix = trim($parts[1]);

        if (is_numeric($prix)) {
            $produitsValides[] = ["nom" => $nom, "prix" => $prix];
        }
    }
}

echo "Produits valides :<br>";
var_dump($produitsValides);

$nombreTotalProduitsValides = count($produitsValides);
$prixTotal = array_sum(array_column($produitsValides, 'prix'));

echo "Nombre total de produits valides : " . $nombreTotalProduitsValides . "<br>";
echo "Prix total du panier : " . number_format($prixTotal, 2) . "<br>";

?>