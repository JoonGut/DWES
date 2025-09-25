<?php
include("conexion.php");
$id = $_GET['id'];
$bd_form="SELECT * FROM alumnado where id = '$id'";
$resultado= mysqli_query($conexion, $bd_form);
$row = mysqli_fetch_assoc($resultado);

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
    <h1>Modificar Alumno</h1>
    <!-- Aquí puedes añadir el contenido del formulario o cualquier otro HTML -->
    <form action="modif_datos.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <br>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" required>
        <br>
        <label for="fch_nacimiento">Fecha de Nacimiento:</label>
        <br>
        <input type="date" name="fch_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" required>
        <br>
        <input type="radio" name="curso" value="1" <?php if($row['curso_matriculado'] == 1) echo 'checked'; ?>> 1º ESO
        <input type="radio" name="curso" value="2" <?php if($row['curso_matriculado'] == 2) echo 'checked'; ?>> 2º ESO
        <input type="radio" name="curso" value="3" <?php if($row['curso_matriculado'] == 3) echo 'checked'; ?>> 3º ESO
        <input type="radio" name="curso" value="4" <?php if($row['curso_matriculado'] == 4) echo 'checked'; ?>> 4º ESO
        <br>
        <label for = "email">Email:</label>
        <br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <br>
        <label for="password">Contraseña:</label>
        <br>
        <input type="text" name = "password" value="<?php echo $row['password']; ?>" required>
        <br>
        <input type="submit" value="Enviar">

    </form>
    <!--
    <section class="container.tabla">
        <div class="titulo">Alumnos registrados</div>
        <div class="header">Nombre</div>
        <div class="header">Apellido</div>
        <div class="header">Fecha de Nacimiento</div>
        <div class="header">Curso</div>
        <div class="header">Email</div>
        <div class="header">Contraseña</div>
        <div class="header">Acciones</div>

        
        </*?php 
        $resultado= mysqli_query($conexion, $bd_form);

        while($row= mysqli_fetch_assoc($resultado)){ ?>
            <div class="campo_tabla">
                <input type="text" name="apellidos" value="</*?php echo $row["apellidos"]; ?>">
            </div>
            <div class="campo_tabla">
                <input type="text" name="apellidos" value="</*?php echo $row["apellidos"]; ?>">
            </div>
            <div class="campo_tabla">
                <input type="date" name="fch_nacimiento" value="</*?php echo $row["fecha_nacimiento"]; ?>">
            </div>
            <div class="campo_tabla">
                <input type="text" name="curso" value="</*?php echo $row["curso_matriculado"]; ?>">
            </div>
            <div class="campo_tabla">
                <input type="email" name="email" value="</*?php echo $row["email"]; ?>">
            </div>
            <div class="campo_tabla">
                <input type="text" name="password" value="</*?php echo $row["password"]; ?>">
            </div>

<!--
            <div class="campo_tabla">
                <a href="modificar.php?id=</*?php echo $row['nombre'];?>">Editar</a>
                <input type="text" id="apellidos_</*?php echo $row['id']; ?>" value="</*?php echo $row['apellidos']; ?>">
                <!--<a href="actualizar.php?id=<*?php echo $row['nombre'];?>" class="campo_tabla">Editar</a>
                <a href="eliminar.php?nombre=</*?php echo $row['nombre'];?>" class="campo_tabla">Eliminar</a>
            </div>
     /*Cierre del while*/
        </*?php} mysqli_free_result($resultado); ?>

        
    </section>

-->
</body>
</html> 