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

        public function insertar($id, $nombre, $apellido, $email, $telefono){

            try {
                $conexion = Database::getInstance(); //obtiene la instancia de la clase
                $query = $conexion->db->prepare("INSERT INTO estudiantes (identificacion, nombres, apellidos, email, telefono) VALUES (:identificacion, :nombres, :apellidos, :email, :telefono)");
                $query->execute(
                    array(
                        ':identificacion' => $id,
                        ':nombres' => $nombre,
                        ':apellidos' => $apellido,
                        ':email' => $email,
                        ':telefono' => $telefono
                    ) 
                );

                return 1; //retorna 1 si fue exitoso

            } catch(PDOException $error){
                echo $error;
                return 0; // retorna o si falla
            }
        }

        public function validarEstudiante($id){
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT identificacion FROM estudiantes WHERE identificacion=:identificacion");
            $query->execute(
                array(
                    ":identificacion" => $id
                )
                );
            return ($query);

        }


        public function datosEstudiantes() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from estudiantes");
            $query->execute();
            return $query;
        }



        
    }
?>