<?php include('header.php') ?>
<section>
    <h1 class="titulo">Ingreso </h1>
    <div class="container__form">
        <form action="validar.php" class="form" method="POST">
        <label for="ususario">Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label for="clave">Contraseña</label>
        <input type="password" name="clave">
        
        <input type="submit" value="Ingresar">
</form>

<?php
if(isset($_GET['error'])){
    echo "<h3>Datos Incorrectos </h3>";
}

?>
    </div>
</section>
</body>
</html>