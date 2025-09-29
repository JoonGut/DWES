<?php
include("conexion.php");
$id = $_GET['id'];
$bd_form="SELECT * FROM deporte where id = '$id'";
$resultado= mysqli_query($conexion, $bd_form);
$row = mysqli_fetch_assoc($resultado);

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
    <h1>Modificar Deporte</h1>
    <!-- Aquí puedes añadir el contenido del formulario o cualquier otro HTML -->
    <form action="modif_datos.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <br>
        <label for="precioHora">Precio por Hora:</label>
        <br>
        <input type="text" name="precioHora" value="<?php echo $row['precioHora']; ?>" required>
        <br>
        <label for="fechaCreacion">Fecha de Creación:</label>
        <br>
        <input type="date" name="fechaCreacion" value="<?php echo $row['fechaCreacion']; ?>" required>
        <br>
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html> 
