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
    
    <h1>Información - Página 2</h1>
    <p>Este es el contenido de la segunda página protegida.</p>
    
    <a href="pagina1.php">Volver a la página 1</a><br><br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>