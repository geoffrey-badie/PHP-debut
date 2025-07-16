<?php
$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

echo "Nombre de casquettes en stock : " . $produits[1]["stock"] . "\n";

$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

echo "<table border='1'><tr><th>Produit</th><th>Prix</th><th>Stock</th><th>CA potentiel</th></tr>";
foreach ($produits as $produit) {
    echo "<tr>";
    echo "<td>" . $produit["nom"] . "</td>";
    echo "<td>" . $produit["prix"] . " €</td>";
    echo "<td>" . $produit["stock"] . "</td>";
    echo "<td>" . ($produit["prix"] * $produit["stock"]) . " €</td>";
    echo "</tr>";
}
echo "</table>";
?>