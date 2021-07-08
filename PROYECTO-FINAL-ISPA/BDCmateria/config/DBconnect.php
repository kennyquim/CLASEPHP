<?php
    class Database {

        public $db; //controladores db
        private static $dns = "mysql:host=localhost;dbname=colegioispa"; //url de la base de datos
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

        public function insertar($nombres){

            try {
                $conexion = Database::getInstance(); //obtiene la instancia de la clase
                $query = $conexion->db->prepare("INSERT INTO materias (nombres) VALUES (:nombres)");
                $query->execute(
                    array(
                        ':nombres' => $nombres
                    ) 
                );

                return 1; //retorna 1 si fue exitoso

            } catch(PDOException $error){
                echo $error; 
                return 0; // retorna o si falla
            }
        }

        public function validarMateria($nombre){
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT nombres FROM materias WHERE nombres=:nombres");
            $query->execute(
                array(
                    ":nombres" => $nombre
                )
                );
            return ($query);

        }


        public function datosMateria() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from materias");
            $query->execute();
            return $query;
        }



        
    }
?>