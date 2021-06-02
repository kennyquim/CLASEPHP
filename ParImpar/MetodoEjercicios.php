<?php

    if(isset($_POST['number'])){

        $numero = intval($_POST['number']);

        if ($numero%2==0){
            $value = 1;
        } else {
            $value = 0;
        }
    } 

    echo $number."value";

    header("Location: ./EjerciciosParImpar.php?confirm=".$value)
?>