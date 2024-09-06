<?php 
session_start();
//Verificar si el usuario ha iniciado sesion
if (!isset($_SESSION['admin'])){
   header('Location: index.php');
   exit();
}

include('header.php');

$nro1 = rand(0, 9);
$nro2 = rand(0, 9);
$nro3 = rand(0, 9);
$letra = array('a', 'h', 'g', 'l', 'd', 'm','k');
$simbolo = array ('%', '$', '/', '@','#');
$mezcla_letra= rand(0, 6);
$mezcla_simbolo = rand (0, 4);

$_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;

?>
<section>
    <h1 class="titulo">Bienvenidos </h1>
    <div class="container__form">
        <form action="cargar_personaje.php" class="form" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="file" name="imagen" placeholder="imagen">
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        <select name="name" id="">
        <option value="proceso">En proceso</option>
        <option value="finaliado">Finalizado</option>

        </select>
        <img src="captcha.php" alt="captcha">
        <input type="text" name="captcha" placeholder="Ingresa captcha">
        <input type="submit" value="Cargar Personajes">
</form>

<?php
if(isset($_GET['error_codigo'])){
    echo "<h3>Codigo de verificación </h3>";
}

if(isset($_GET['ok'])){
    echo "<h3>Mensaje enviado con éxito </h3>";
}

if(isset($_GET['error'])){
    echo "<h3>Imagen incorrecta. Verifique formato y el tamaño (max 200kb) </h3>";
}

?>


    </div>
</section>
<?php include ('footer.php');?>
