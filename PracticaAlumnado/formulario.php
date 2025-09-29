<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polideportivo Muskiz</title>
</head>
<body>
    <!-- Aquí puedes añadir el contenido del formulario o cualquier otro HTML -->
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" required >
        <br>
        <label for="precioHora">Precio por Hora:</label>
        <br>
        <input type="number" name="precioHora" required >
        <br>
        <input type="submit" value="Enviar">
    </form>
    <section class="container.tabla">
        <div class="titulo">Alumnos registrados <br></div>
        <div class="header">Nombre</div>
        <div class="header">Precio por Hora</div>
        <div class="header">Fecha creacion</div>
        <div class="header">Acciones</div>

        <?php 
        $bd_form = "SELECT * FROM deporte";
        $resultado= mysqli_query($conexion, $bd_form);

        while($row= mysqli_fetch_assoc($resultado)){ ?>
        <div class="campo_tabla_id"><?php echo $row["id"]; ?></div>
        <div class="campo_tabla"><?php echo $row["nombre"]; ?></div>
        <div class="campo_tabla"><?php echo $row["precioHora"]; ?></div>
        <div class="campo_tabla"><?php echo $row["fechaCreacion"]; ?></div>
        <div class="campo_tabla">

            <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            <a href="cargar_modif.php?id=<?php echo $row['id'];?>">Editar</a>
            <!--<a href="actualizar.php?id=<*?php echo $row['nombre'];?>" class="campo_tabla">Editar</a>
            <a mehref="eliminar.php?nombre=<*?php echo $row['nombre'];?>" class="campo_tabla">Eliminar</a>-->
        </div>
        <?php } mysqli_free_result($resultado); ?>

        
    </section>


</body>
</html> 
