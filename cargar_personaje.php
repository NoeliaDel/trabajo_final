<?php

session_start();
include('conexion.php');

$codigo_captcha = $_POST['captcha'];
if($codigo_captcha == $_SESSION['codigo_captcha']){

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
//$imagen = $_POST["imagen"];
$descripcion = $_POST["descripcion"];
$estado = $_POST['estado'];

$nombre_img = $_FILES['imagen']['name'];
$tamanio_img = $_FILES['imagen']['size'];
$tipo_img = $_FILES['imagen']['type'];
$tmp_img = $_FILES['imagen']['tmp_name'];

$destino = 'img' .$nombre_img;
if(($tipo_img !='image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamanio_img > 200000){
    header('Location: cargar.php?error');
}else{
    move_uploaded_file($tmp_img, $destino);

    mysqli_query($conexion, "INSERT INTO personaje VALUES (DEFAULT, '$nombre', '$apellido', '$nombre_img', '$descripcion', '$estado')");
header("Location: cargar.php?ok");
}

} else {
    header('Location: index.php?error_codigo');
}
mysqli_close($conexion);