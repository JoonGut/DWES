<?php
include ("conexion.php");

$id =$_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fch_nacimiento = $_POST["fch_nacimiento"];
$curso = $_POST["curso"];
$password = $_POST["password"];
$email = $_POST["email"];


// Modificar por nombre (que es único)
$modificacion = "UPDATE alumnado SET  nombre = '$nombre', apellidos='$apellidos', fecha_nacimiento='$fch_nacimiento', curso_matriculado='$curso', password='$password', email='$email' WHERE id='$id'";

$result = mysqli_query($conexion, $modificacion);

if($result){
    echo "<script> alert('Datos actualizados correctamente'); window.location='formulario.php' </script>";
} else{
    echo "<script> alert('No se pudo actualizar los datos'); window.location='formulario.php' </script>";
}
mysqli_close($conexion);