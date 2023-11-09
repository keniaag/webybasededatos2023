<?php

    $server     = "localhost:3306"; //para XAMPP es solo "localhost"
    $user       = "root";
    $password   = "";
    $baseDatos  = "basededatoscetis107";

    $conexion = new mysqli($server, $user, $password, $baseDatos);

    if($conexion->connect_error){
        die("Fallo la conexion" . $conexion->connect_error);
    }

?>