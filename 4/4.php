<?php
$temperature = 15;
echo ($temperature < 10) ? "Froid" : (($temperature >= 10 && $temperature <= 20) ? "Doux" : "Chaud");
?>