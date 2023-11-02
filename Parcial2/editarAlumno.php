<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'conexionn.php';
        include 'menu.php';
    
        $id = $_GET["id"];
        $sql = "SELECT * FROM alumnos id=".$id;
        $datos = $conexionn->query($sql);
        $alumnos = $datos->fetch_assoc();

    ?>


    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
            <form action="GuardaResgistro.php" method="POST">
                 <input type="hidden" name="id" value="<?php echo $alumno["id"]; ?>" >
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input value="<?php echo $alumno["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="teclea el nombre del alumno"  required>

                </div>
                <div class="form-group">
                    <label for="">Numero de control:</label>
                    <input value= "<?php echo $alumno["numero_control"]; ?>" name="Numero de control" type="text" class="form-control" placeholder="teclea el numero de control"  required>

                </div>
                <div class="form-group">
                    <label for="">Semestre:</label>
                    <input value="<?php echo $alumno["semestre"]; ?>" name="semestre" type="text" class="form-control" placeholder="teclea el semestre"  required>

                </div>
                <div class="form-group">
                    <label for="">Edad:</label>
                    <input value="<?php echo $alumno["edad"]; ?>"name="edad" type="text" class="form-control" placeholder="teclea la edad"  required>

                </div>
                <div class="form-group">
                    <label for="">Turno:</label>
                    <select name="turno" id="" class="form-control" required>
                    <option value="<?php echo $alumno["turno"]; ?>"><?php echo $alumno["turno"]; ?></option>
                        <option value="">seleccione el turno</option>
                        <option value="">MATUTINO</option>
                        <option value="">VESPERTINO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sexo:</label>
                    <select name="sexo" class="form-control"  required>
                        <option value="">seleccione el sexo</option>
                        <option value="0">FEMENINO</option>
                        <option value="1">MASCULINO</option>
                        <option value="2">prefiero no responder</option>
                    </select>
                </div><br>
                <div>
                    <input type="submit" value="resgistrar" class="btn btn-primary">
                    <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                </div>
  
            </form>

        </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>