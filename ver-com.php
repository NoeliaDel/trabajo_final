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

    $archivo = fopen('comentarios.txt', 'r');
    $tamaño = filesize('comentarios.txt');
    $contenido = fread($archivo, $tamaño);
    echo $contenido;

    //Contar la cantidad de lineas en el archivo basado en el separador ;

    $lineas = explode("<h3", $contenido);
    $cantidadLineas = count($lineas);
    echo "Cantidad de lineas: " .$cantidadLineas;
    fclose($archivo);

    ?>
</body>
</html>