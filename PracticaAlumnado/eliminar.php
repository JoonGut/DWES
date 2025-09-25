<?php
include ("conexion.php");
$id = $_GET["id"];
$bd_form = "DELETE FROM alumnado WHERE id = '$id'";
$resultado= mysqli_query($conexion, $bd_form);
if ($resultado){
    header("Location:formulario.php");
}else{
    echo '<script>alert("Error")</script>';
}
?>