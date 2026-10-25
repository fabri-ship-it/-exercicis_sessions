<?php
session_start();

if (!isset($_SESSION['camis'])) { $_SESSION['camis'] = 0; }
if (!isset($_SESSION['pantacas'])) { $_SESSION['pantacas'] = 0; }

// Sumem les quantitats enviades pel formulari
if (isset($_POST['q_camis'])) { $_SESSION['camis'] += intval($_POST['q_camis']); }
if (isset($_POST['q_pantacas'])) { $_SESSION['pantacas'] += intval($_POST['q_pantacas']); }
?>

<html>
<head>
    <title>Cistella</title>
</head>
<body>
    <h2>estado de la cistella:</h2>
    <p>Tens <strong><?php echo $_SESSION['camis']; ?></strong> camis i <strong><?php echo $_SESSION['pantacas']; ?></strong> pantacas.</p>
    
    <hr>
        <form action="cistella_compra.php" method="POST">
        <p>camis(15 €) - Quantitat: <input type="number" name="q_camis" value="0" min="0"></p>
        <p>pantacas (30 €) - Quantitat: <input type="number" name="q_pantacas" value="0" min="0"></p>
        <input type="submit" value="Afegir més a la cistella">
    </form>

    <br><br>
    <a href="resum.php"><button>Finalitzar compra</button></a>
</body>
</html>