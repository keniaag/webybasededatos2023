<?php 
  include 'conexion.php';

  $nombre = $_POST["nombre"];
  $semestre = $_POST["semestre"];
  $especialidad = $_POST["especialidad"];

  $sql = "INSERT INTO materia(nombre, semestre, especialidad) VALUES ('".$nombres."', ".$semestre.", '".$especialidad."')";

  if(conexion->query($sql) === TRUE){
    header("Location: ConsultarMaterias.php");
    $conexion->close();
    exit;
  }else{
    echo"<h2>Ocurrió un error</h2><p>Error: " .$sql . "<br>" .$conexion->error . "<p>";
    echo"<h3><a href='ConsultarMaterias.php'>Regresar a materias</a></h3>";
  }
?>