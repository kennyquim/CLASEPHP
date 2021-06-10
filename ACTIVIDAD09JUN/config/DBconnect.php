<?php
    class Database {

        public $db; //controladores db
        private static $dns = "mysql:host=localhost;dbname=mqueencars"; //url de la base de datos
        private static $user = "root"; //usuario de la conexión
        private static $pass = ""; //contraseña del usuario
        private static $instance; //instrancia de la conexion

        public function __construct(){
            $this->db = new PDO(self::$dns, self::$user, self::$pass);
        }

        public static function getInstance(){
            if(!isset(self::$instance)){
                $object = __CLASS__;
                self::$instance = new $object;
            }
            return self::$instance;
        }

        public function insertar($nombre, $apellido, $edad, $marcacoche, $modelo, $numerocompetidor, $categoria){

            try {
                $conexion = Database::getInstance(); //obtiene la instancia de la clase
                $query = $conexion->db->prepare("INSERT INTO usuarios (nombre, apellido, edad, marcadecoche, modelo, numerocompetidor, categoria) VALUES (:nombre, :apellido, :edad, :marcadecoche, :modelo, :numerocompetidor, :categoria)");
                $query->execute(
                    array(
                        ':nombre' => $nombre,
                        ':apellido' => $apellido,
                        ':edad' => $edad,
                        ':marcadecoche' => $marcacoche,
                        ':modelo' => $modelo,
                        ':numerocompetidor' => $numerocompetidor,
                        ':categoria' => $categoria

                    ) 
                );

                return 1; //retorna 1 si fue exitoso

            } catch(PDOException $error){
                return 0; // retporna o si falla
            }
        }


    }
?>