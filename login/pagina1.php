<?php
session_start();

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<body>
    <p>Usuario conectado: <strong><?php echo $_SESSION['nombre_usuario']; ?></strong></p>
    <hr>
    
    <h1>Información - Página 1</h1>
    <p>Este es el contenido secreto de la primera página.</p>
    
    <a href="pagina2.php">Ir a la página 2</a><br><br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>