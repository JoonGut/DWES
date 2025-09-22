<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fch_nacimiento = $_POST["fch_nacimiento"];
$curso = $_POST["curso"];
$password = $_POST["password"];
$email = $_POST["email"];


$insert = "INSERT INTO alumnado (nombre, apellidos,fecha_nacimiento, curso_matriculado, email, password) VALUES ('$nombre', '$apellidos', '$fch_nacimiento',  '$curso', '$email', '$password')";
$result = mysqli_query($conexion, $insert);

if($result){
    echo "<script> alert('Datos insertados correctamente'); window.location='formulario.html' </script>";
} else{
    echo "<script> alert('No registrado correctamente'); window.location='formulario.html' </script>";
}
mysqli_close($conexion);
?>