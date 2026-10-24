<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

<html>
<body>
    <p>Usuario:<?php echo $_SESSION['nombre_usuario']; ?><a href="logout.php">Desconectar</a></p>
    <hr>