<?php
    include_once("DBconnect.php");

    if(isset($_POST['identificacion']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['telefono'])){

        if($_POST['identificacion'] !== "" && $_POST['nombres'] !== "" && $_POST['apellidos'] !== "" && $_POST['email'] !== "" && $_POST['telefono'] !== ""){

            $id = $_POST['identificacion'];
            $nombre = $_POST['nombres'];
            $apellido = $_POST['apellidos'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
    
            $conexion = new Database;
            $resultado = $conexion->validarEstudiante($id);
            $contador = $resultado->rowCount();
            echo $contador;
            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->insertar($id, $nombre, $apellido, $email, $telefono);
            }
        } else {
            $confirm = 2; // uno o mas campos estan vacios
        }
    }
    header('Location: ../index.php?confirm='.$confirm)
?>