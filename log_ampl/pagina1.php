<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

?>

<html>
<body>
    <p>Usuario:<?php echo $_SESSION['nombre_usuario']; ?><a href="logout.php">Desconectar</a></p>
    <hr>

<h1>Información - Página 1</h1>
    <p>contenido</p>
    
    <a href="pagina2.php">ir a la pagina 2</a>
</body>
</html>