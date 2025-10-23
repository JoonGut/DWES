<?php
require_once 'F4.php';
require_once 'F3.php';
require_once 'F2.php';
require_once 'F1.php';
require_once 'FAcademy.php';
require_once '../Api/Pilotos.php';


    $prueba = new F4("España","Jon","Español",12,"Ferrari",3);
    $prueba->otorgarPuntos(-1);
    echo $prueba->getPuntos();
    echo $prueba->getNombrePiloto();

    $pruebaF3 = $prueba->subirCategoria("Gueñes", true);
    echo $pruebaF3->getNombreAcademia();
    echo $pruebaF3->getNombrePiloto();

    $pruebaF2 = $pruebaF3->subirCategoria( true);
    echo $pruebaF2->getNombrePiloto();

    $piloto = new Pilotos();
    $piloto ->obtenerPiloto(16);
    $piloto ->obtenerPiloto(44);
?>