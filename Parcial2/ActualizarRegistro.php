<?php

    include 'conexionn.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $numero_control = $_POST["numero_control"];
    $semestre = $_POST["semestre"];
    $edad = $_POST["edad"];
    $turno = $_POST["turno"];
    $sexo = $_POST["sexo"];


    $sql = "UPDATE alumnos SET nombre='".$nombre."', numero_control='".$numero_control."', semestre=".$semestre.", 
    edad=".$edad.", turno='".$turno."', sexo=".$sexo."WHERE id=".$id;

    if($conexionn->query($sql) === TRUE){
        header("location: consultarAlumnos.php");
        $conexionn->close();
        exit;
    } else {
        echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexionn->error . "</p>";
        echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
        $conexionn->close();
    }


?>    