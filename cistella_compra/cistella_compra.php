<?php
session_start();

if (!isset($_SESSION['camis'])) { $_SESSION['camis'] = 0; }
if (!isset($_SESSION['pantacas'])) { $_SESSION['pantacas'] = 0; }

// Sumem les quantitats enviades pel formulari
if (isset($_POST['q_camis'])) { $_SESSION['camis'] += intval($_POST['q_camis']); }
if (isset($_POST['q_pantacas'])) { $_SESSION['pantacas'] += intval($_POST['q_pantacas']); }
?>
