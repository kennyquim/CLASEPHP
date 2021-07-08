<?php
    include_once("DBconnect.php");

    if(isset($_POST['nombres'])){

        if($_POST['nombres'] !== ""){

            $nombres = $_POST['nombres'];
    
            $conexion = new Database;
            $resultado = $conexion->validarMateria($nombres);
            $contador = $resultado->rowCount();
            echo $contador;
            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->insertar($nombres);
            }
        } else {
            $confirm = 2; // uno o mas campos estan vacios
        }
    }
    header('Location: ../index.php?confirm='.$confirm)
?>