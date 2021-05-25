<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //impresiones de texto
        echo "<h1>Hola Mundo</h1>";

        //variables
        $nombre = "Michael Cocuy";
        $edad = 23;

        //<h3>minombre edad: 23 años</h3>
        echo '<h3>'.$nombre.' edad: '.$edad.' años</h3>';

        //comentario
        /*
            BLOQUE DE COMENTARIOS
        */

        //EJEMPLO DE COMO SUMAR O ACUMULAR $edad += 10;
        $edad .= 10;
        echo '<h3>'.$edad.'</h3>';

        //condicionales
        if($edad > 17){
            echo '<h3>Es mayor de edad</h3>';
        } else {
            echo '<h3>Es menor de edad</h3>';
        }

        //iteraciones en PHP
        for ($i = 1; $i <= 5; $i++){
            echo '<h5>iteracion #'.$i.'</h5>';
        }
    ?>


</body>
</html>