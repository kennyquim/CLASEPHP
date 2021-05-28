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
        class Persona {

            //atributos
            public $nombre; //gerardo 
            public $apellidos;
            public $edad;
            public $numId;


            //metodos
            public function info(){

                $info = "";

                $info .= "<p>".$this->nombre."</p>";
                $info .= "<p>".$this->apellidos."</p>";
                $info .= "<p>".$this->edad."</p>";
                $info .= "<p>".$this->numId."</p>";

                return $info;
            }

        }
        //creacion de una nueva persona
        $persona = new Persona();

        //definiendo los atributos
        $persona->nombre = "Gerado";
        $persona->apellidos = "Patiño";
        $persona->edad = "15";
        $persona->numId = "15614891132";

        echo $persona->info();


    ?>

</body>
</html>