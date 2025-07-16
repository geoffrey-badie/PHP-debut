<?php
$eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

foreach ($eleves as $nom => $note) {
    echo "$nom a obtenu $note/20\n";
    echo "<br>";
}

$moyenneCount = 0;
foreach ($eleves as $note) {
    if ($note >= 10) {
        $moyenneCount++;
    }
}

echo "$moyenneCount élèves ont obtenu la moyenne\n";
?>