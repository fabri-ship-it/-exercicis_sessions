<?php
session_start();

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: index.html");
    exit();
}
?>
<html>
<body>
    <p>
        Usuario:<?php echo $_SESSION['nombre_usuario']; ?><a href="logout.php">Desconectar</a>
    </p>
    <hr>
    
    <h1>Información - Página 2</h1>
    <p>Este es el contenido de la segunda pagina.</p>
    
    <a href="pagina1.php">ir a la pagina 1</a>
</body>
</html>