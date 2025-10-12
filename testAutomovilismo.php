<?php
require_once 'F4.php';
    $prueba = new F4("España","Jon","Español",12,"Ferrari",3);
    $prueba->otorgarPuntos(-1);
    echo $prueba->getPuntos();

    $pruebaF3 = $prueba->subirCategoria("Gueñes", true);
    echo $pruebaF3->getNombreAcademia();

    $pruebaF2 = $pruebaF3->subirCategoria("Red Bull", true);


?>