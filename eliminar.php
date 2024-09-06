<?php

session_start();
if (!isset($_SESSION['admin'])){
    $_SESSION['mensaje'] = "Es necesario iniciar sesion para acceder a esta funcionalidad";
    header('Location: index.php');
    exit();
}

include('conexion.php');

$id_personaje = $_GET['id'];

mysqli_query($conexion, "DELETE FROM personaje WHERE id=$id_personaje");
header("Location: ver.php");