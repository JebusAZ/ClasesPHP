<?php

    if($_GET){
        //Recibe información del formulario HTML por método POST
        $nombre = $_GET['nombre'];

        echo "Hola " . $nombre;
    }
?>
