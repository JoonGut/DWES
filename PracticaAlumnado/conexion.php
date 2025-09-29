<?php
/*$conexion = mysqli_connect("localhost", "root", "", "bd_escuela") or 
    die ("Problemas en la conexión");*/
 $conexion= mysqli_connect("localhost", "root", "", "simulacro_dwes_1");
mysqli_set_charset($conexion, "utf8");

if (!$conexion){
    echo "No se ha podido conectar con la base de datos";
}else{
    echo "Se ha podido conectar a la base de datos";
}

?>
