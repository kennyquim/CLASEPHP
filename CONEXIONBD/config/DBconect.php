<?php
   class Database {

    public $db; 
    private static $dns = "mysql:host=localhost;dbname=pruebas"; //url de la BD
    private static $user = "root"; //usuario de la conexion
    private static $pass = ""; //contraseña del usuario
    private static $instance; //instancia de la conexion 
   
    //metodo constructores 
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

    public function insertar($nombre, $apellido, $edad, $email){
         
        try {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("INSERT INTO persona (nombre, apellido, email, edad) VALUES (:nombre, :apellido, :email, :edad)");
            $query->execute(
                array(
                    ':nombre' => $nombre,
                    ':apellido' => $apellido,
                    ':email' => $email,
                    ':edad' => $edad
                )
            );

            return 1; //retorna 1 si fue exitoso

            } catch(PDOException $error){
                return 0; // retporna 0 si falla
            }
        }
    }
?>