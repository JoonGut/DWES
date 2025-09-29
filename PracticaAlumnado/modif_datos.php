<?php
include ("conexion.php");

$id =$_POST["id"];
$nombre = $_POST["nombre"];
$precioHora = $_POST["precioHora"];
$fechaCreacion = $_POST["fechaCreacion"];


// Modificar por nombre (que es único)
$modificacion = "UPDATE deporte SET  nombre = '$nombre', precioHora='$precioHora', fechaCreacion='$fechaCreacion' WHERE id='$id'";

$result = mysqli_query($conexion, $modificacion);

if($result){
    echo "<script> alert('Datos actualizados correctamente'); window.location='formulario.php' </script>";
} else{
    echo "<script> alert('No se pudo actualizar los datos'); window.location='formulario.php' </script>";
}
mysqli_close($conexion);
