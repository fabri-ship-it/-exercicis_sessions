<?php
session_start();

$camis = isset($_SESSION['camis']) ? $_SESSION['camis'] : 0;
$pantacas = isset($_SESSION['pantacas']) ? $_SESSION['pantacas'] : 0;

$preu_scamis= 15;
$preu_pantalcas= 30;

$total_camis = $camis * $preu_camis;
$total_pantacas = $pantacas * $preu_pantacas;
$total_compra = $total_camis + $total_pantacas;
?>
