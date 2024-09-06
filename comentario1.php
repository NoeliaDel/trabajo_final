<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Comentarios</title>
</head>
<body>
    <?php
    $fecha_actual = date("l/M/Y");
    $texto =
    "<h3> Nombre: " .$_POST['nombre'] 
    ."Apellido: "  .$_POST['apellido'] ."</h3>"."\n"
    ."<p> Comentario: " .$_POST['msj']. "</p>"
    ."<h5>" ."Fecha de comentario: " .$fecha_actual . "</h5>";

    $archivo = fopen('comentarios.txt', 'a');
    fputs($archivo, $texto);
    echo "<p>Datos almacenados </p>"
    ?>

    <a href="./ver-com.php"> Ir a comenarios</a>
</body>
</html>