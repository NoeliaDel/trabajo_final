<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Document</title>
</head>
<body>
<?php include('header.php') ?>
    <div class="container__form">
    <h1>Comentarios</h1>
    <form action="comentario1.php" method="post">
    <input type="text" name= "nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <textarea name="msj" id="" placeholder="Deje aqui su comentario"></textarea>
    <input type="submit" value="Enviar comentario">

    </form>
    </div>
</body>
</html>