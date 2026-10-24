<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($usuario != "" && $usuario == $password) {
    $_SESSION['nombre_usuario'] = $usuario;
    header("Location: pagina1.php");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>