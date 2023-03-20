<?php

include './vehicule.php';

$voiture = new Vehicule ('Mercedes CLK', 250, 4);
$moto = new Vehicule ('Honda CBR', 280, 2);

$voiture->detect();
$moto->detect();

$voiture->boost();
echo '<pre>';
var_dump($voiture);
echo '</pre>';

$voiture->plusRapide($voiture,$moto);




?>