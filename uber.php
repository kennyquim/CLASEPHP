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
        class Viaje {

            //atributos
            public $partida;
            public $llegada;
            public $precioU;
            public $datosCliente;
            public $datosConductor;

            //metodos
            public function mostrarPartida(){
                return "<p>".$this->partida."</p>";
            }

            public function mostrarLlegada(){
                return "<p>".$this->llegada."</p>";
            }

            public function precio(){
                $distancia = $this->llegada - $this->partida;
                $costo = $distancia * $this->precioU;

                return "<p>".$costo."</p>";
            }

            public function mostrarConductor(){
                return "<p>".$this->datosConductor."</p>";
            }

            public function mostrarCliente(){
                return "<p>".$this->datosCliente."</p>";
            }
        }

        class Clientes {

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

        class Conductores {

            //atributos
            public $nombre; //gerardo 
            public $apellidos;
            public $numId;
            public $marcaVehiculo;
            public $placas;


            //metodos
            public function info(){

                $info = "";

                $info .= "<p>".$this->nombre."</p>";
                $info .= "<p>".$this->apellidos."</p>";
                $info .= "<p>".$this->marcaVehiculo."</p>";
                $info .= "<p>".$this->placas."</p>";
                $info .= "<p>".$this->numId."</p>";

                return $info;
            }
        }

        $cliente = new Clientes();


        $cliente->nombre = "Gerado";
        $cliente->apellidos = "Patiño";
        $cliente->edad = "15";
        $cliente->numId = "15614891132";

        $conductor = new Conductores();

        $conductor->nombre = "Kenny";  
        $conductor->apellidos = "Quimbayo";
        $conductor->numId = "324851548";
        $conductor->marcaVehiculo = "Mustang Boss 302";
        $conductor->placas = "BGD589";

        $viaje = new Viaje();

        $viaje->partida = 5;
        $viaje->llegada = 15;
        $viaje->precioU = 1000;
        $viaje->datosCliente = $cliente->info();
        $viaje->datosConductor = $conductor->info();

        echo "<h1> Factura De viaje </h1>".
            "<b>Punto de partida: </b>".$viaje->mostrarPartida().
            "<b>Punto de llegada: </b>".$viaje->mostrarLlegada().
            "<b>Precio del servicio: </b>".$viaje->precio().
            "<b>Datos del conductor: </b>".$viaje->mostrarConductor().
            "<b>Datos del Cliente: </b>".$viaje->mostrarCliente();
    ?>
</body>
</html>