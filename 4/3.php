<?php
$status = "modifier";
$message = match ($status) {
    "en cours"   => "Votre commande est en cours de traitement.",
    "expédiée"  => "Votre commande a été expédiée.",
    "livrée" => "Votre commande a été livrée.",
    "annulée"=> "Votre commande a été annulée.",
    default    => "Action non reconnue.",
};
echo $message;
?>