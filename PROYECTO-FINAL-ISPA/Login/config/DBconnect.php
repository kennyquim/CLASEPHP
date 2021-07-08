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

        public function insertar($identificacion, $nombres, $apellidos, $username, $contraseña){
            $role = "1";

            try {
                $conexion = Database::getInstance(); //obtiene la instancia de la clase
                $query = $conexion->db->prepare("INSERT INTO users (identificacion, nombres, apellidos, username, password, role) VALUES (:identificacion, :nombres, :apellidos, :username, :password, :role)");
                $query->execute(
                    array(

                        ':identificacion' => $identificacion,
                        ':nombres' => $nombres,
                        ':apellidos' => $apellidos,
                        ':username' => $username,
                        ':password' => $contraseña,
                        ':role' => $role
                        
                    ) 
                );

                return 1; //retorna 1 si fue exitoso

            } catch(PDOException $error){
                echo $error;
                return 0; // retorna o si falla
            }
        }

        public function validarRegistro($identificacion, $username){
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT identificacion, username FROM users WHERE identificacion=:identificacion or username=:username");
            $query->execute(
                array(
                    ":identificacion" => $identificacion,
                    ":username" => $username
                )
                );
            return ($query);

        }


        public function datosEstudiantes() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from users");
            $query->execute();
            return $query;
        }



        
    }
?>