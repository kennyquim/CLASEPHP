<?php
    include_once("DBconnect.php");

    if(isset($_POST['userId']) && isset($_POST['user']) && isset($_POST['userAp']) && isset($_POST['email']) && isset($_POST['passwd']) && isset($_POST['passwdConfirm'])){

        if($_POST['userId'] !== "" && $_POST['user'] !== "" && $_POST['userAp'] !== "" && $_POST['email'] !== "" && $_POST['passwd'] !== "" && $_POST['passwdConfirm'] !== ""){

            $id = $_POST['userId'];
            $nombre = $_POST['user'];
            $apellido = $_POST['userAp'];
            $email = $_POST['email'];
            $contraseña = $_POST['passwd'];
            $confirmcontraseña = $_POST['passwdConfirm'];
    
            $conexion = new Database;
            $resultado = $conexion->validarRegistro($id, $email);
            $contador = $resultado->rowCount();
            echo $contador;
            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->insertar($id, $nombre, $apellido, $email, $contraseña, $confirmcontraseña);
            }
        } else {
            $confirm = 2; // uno o mas campos estan vacios
        }
    }
    header('Location: ../index.php?confirm='.$confirm)
?>