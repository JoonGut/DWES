<?php
include ("conexion.php");
$nombre = $_GET["nombre"];
echo $nombre;
$bd_form = "DELETE FROM alumnado WHERE nombre = '$nombre'";
$resultado= mysqli_query($conexion, $bd_form);
if ($resultado){
    header("Location:formulario.php");
}else{
    echo '<script>alert("Error")</script>';
}
?>