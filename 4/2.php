<?php
$action = "lundi";

switch ($action) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo $action . " est un jour ouvré";
        break;
    case "samedi":
    case "dimanche":
        echo $action . " est dans le week-end";
}
?>