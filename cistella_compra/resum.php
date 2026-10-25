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

<html>
<head>
    <title>Resum</title>
</head>
<body>
    <h1>compra</h1>
    <ul>
        <li>Samarretes: <?php echo $camis; ?> x <?php echo $preu_camis; ?> € = <?php echo $total_camis; ?> €</li>
        <li>Pantalons: <?php echo $pantacas; ?> x <?php echo $preu_pantacas; ?> € = <?php echo $total_pantacas; ?> €</li>
    </ul>
    
    <h2>Total a pagar: <?php echo $total_compra; ?> €</h2>
    
    <form action="confirmar.php" method="POST">
        <input type="submit" value="Confirmar compra">
    </form>
</body>
</html>