<?php
    include_once("DBconnect.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['marcacoche']) && isset($_POST['modelo']) && isset($_POST['numerocompetidor']) && isset($_POST['categoria'])){

        if($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['marcacoche'] !== "" && $_POST['modelo'] !== "" && $_POST['numerocompetidor'] !== "" && $_POST['categoria'] !== ""){

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $marcacoche = $_POST['marcacoche'];
            $modelo = $_POST['modelo'];
            $numerocompetidor = $_POST['numerocompetidor'];
            $categoria = $_POST ['categoria'];

            $conexion = new Database;
            $resultado = $conexion->validarCorredor($numerocompetidor);
            $contador = $resultado->rowCount();
            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->insertar($nombre, $apellido, $edad, $marcacoche, $modelo, $numerocompetidor, $categoria);
            }
        } else {
            $confirm = 2; // uno o mas campos estan vacios
        }

    }
    
    header('Location: ../index.php?confirm='.$confirm)
?>