<?php
if (isset($_GET['search'])) {
    $searchText = $_GET['search'];
    if (!empty($searchText)) {
        echo "Vous avez recherché : " . htmlspecialchars($searchText);
    } else {
        echo "Le champ de recherche est vide.";
    }
} else {
    echo "Aucun texte de recherche n'a été soumis.";
}
?>