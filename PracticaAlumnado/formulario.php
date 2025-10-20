<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnado ESO</title>
</head>
<body>
    <!-- Aquí puedes añadir el contenido del formulario o cualquier otro HTML -->
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" required >
        <br>
        <label for="apellidos">Apellidos:</label>
        <br>
        <input type="text" name="apellidos" required >
        <br>
        <label for="fch_nacimiento">Fecha de Nacimiento:</label>
        <br>
        <input type="date" name="fch_nacimiento" required >
        <br>
        <input type="radio" name="curso" value="1" checked> 1º ESO
        <input type="radio" name="curso" value="2"> 2º ESO
        <input type="radio" name="curso" value="3"> 3º ESO
        <input type="radio" name="curso" value="4"> 4º ESO
        <br>
        <label for = "email">Email:</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <br>
        <input type="text" name = "password" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <!--
    <section class="container-tabla">
        <div class="titulo">Alumnos registrados <br></div>
        <div class="header">Nombre</div>
        <div class="header">Apellido</div>
        <div class="header">Fecha de Nacimiento</div>
        <div class="header">Curso</div>
        <div class="header">Email</div>
        <div class="header">Contraseña</div>
        <div class="header">Acciones</div>-->
    <ul class = "lista-alumnos">
        <li class="header">Nombre</li>
        <li class="header">Apellidos</li>
        <li class="header">Fecha</li>
        <li class="header">Curso</li>
        <li class="header">Email</li>
        <li class="header">Pass</li>
        <li class="header">Acciones</li>

        <?php 
        $bd_form = "SELECT * FROM alumnado";
        $resultado= mysqli_query($conexion, $bd_form);

        while($row= mysqli_fetch_assoc($resultado)){ ?>
        
        <!--
        <div class="campo_tabla_id"></*?php echo $row["id"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["nombre"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["apellidos"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["fecha_nacimiento"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["curso_matriculado"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["email"]; ?></div>
        <div class="campo_tabla"></*?php echo $row["password"]; ?></div>-->


        <li class = "campo_tabla_id"><?php echo $row["id"]; ?></li>
        <li class="campo_tabla"><?php echo $row["nombre"]; ?></li>
        <li class="campo_tabla"><?php echo $row["apellidos"]; ?></li>
        <li class="campo_tabla"><?php echo $row["fecha_nacimiento"]; ?></li>
        <li class="campo_tabla"><?php echo $row["curso_matriculado"]; ?></li>
        <li class="campo_tabla"><?php echo $row["email"]; ?></li>
        <li class="campo_tabla"><?php echo $row["password"]; ?></li>
        <li class = "campo_tabla">
            <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            <a href="cargar_modif.php?id=<?php echo $row['id'];?>">Editar</a>
        </li>
        <?php } mysqli_free_result($resultado); ?>
    </ul>

        <!--<div class="campo_tabla">

            <a href="eliminar.php?id=</*?php echo $row['id']; ?>">Eliminar</a>
            <a href="cargar_modif.php?id=</*?php echo $row['id'];?>">Editar</a>

        </div>-->
        <!-- ?php } mysqli_free_result($resultado); ? -->

        
    <!--</section>-->


</body>
</html> 