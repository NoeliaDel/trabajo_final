<?php include('header.php') ?>
<section class="container__personajes">
    <?php include('conexion.php');
    $consulta_db= mysqli_query($conexion, "SELECT * FROM personaje");
    while($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
        ?>
        <div class="caja_personajes">
            <h2><?php echo $mostrar_datos['nombre']. " " . $mostrar_datos['apellido'] ?></h2>
            <br>
            <img src="img/<?php echo $mostrar_datos['imagen']; ?>" alt="<?php echo $mostrar_datos['nombre']; ?> ">
            <br>
            <p><?php  echo $mostrar_datos['descripcion']?></p>
            <br>
            <p><?php  echo $mostrar_datos['descripcion']?></p>
            <a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a>
            <h3>Estado: <?php  echo $mostrar_datos['estado']?></h3>
            <a href="editar_estado.php?id<?php $mostrar_datos['id']; ?>">Finalizar</a>
        </div>


    <?php } ?>


</section>