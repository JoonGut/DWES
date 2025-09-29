<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$precioHora = $_POST["precioHora"];

//LINK :https://es.stackoverflow.com/questions/13382/como-mostrar-hora-local-con-php
$fecha = (new DateTime('now', new DateTimeZone('Europe/Madrid')));
$fecha = $fecha->format('Y-m-d H:i:s'); // Formato: 2025-09-29 14:30:25


$insert = "INSERT INTO deporte (nombre, precioHora,fechaCreacion) VALUES ('$nombre', '$precioHora', '$fecha')";
$result = mysqli_query($conexion, $insert);

if($result){
    echo "<script> alert('Datos insertados correctamente'); window.location='formulario.php' </script>";
} else{
    echo "<script> alert('No registrado correctamente'); window.location='formulario.php' </script>";
}
mysqli_close($conexion);
?>
