<?php
    include_once("DBconnect.php");

    if(isset($_POST['nombre'])){

        if($_POST['nombre'] !== ""){

            $nombre = $_POST['nombre'];
    
            $conexion = new Database;
            $resultado = $conexion->validarMateria($nombre);
            $contador = $resultado->rowCount();
            echo $contador;
            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->insertar($nombre);
            }
        } else {
            $confirm = 2; // uno o mas campos estan vacios
        }
    }
    header('Location: ../index.php?confirm='.$confirm)
?>