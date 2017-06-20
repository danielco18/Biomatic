<?php
	// Clase para conectarse a la Base de Datos
	class DataBase{
        private static $db_host = "localhost"; // Declaro donde esta alojado la base de datos
        private static $db_name = "_biomatic"; // El nombre de la base de datos
        private static $db_user = "root"; // El usuario de la base datos
        private static $db_pass = ""; // La contraseña del usuario
        private static $db_conn = null; // Declaro una variable de conexion nula porque no se ha abierto la conexion
		// declaro un metodo para conertarme a la bd
        protected static function connect(){
            if (self::$db_conn == null) { // Si la conexion de la bd no existe se conecta
                try {
                    self::$db_conn = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name, self::$db_user, self::$db_pass); // instancio la clase PDO para poder conectarme a la base de datos
                    self::$db_conn->exec("SET CHARACTER SET utf8"); // La pongo con utf8 para que me admita caracteres especiales
                } catch (PDOException $e) {
                    die($e->getMessage()." ".$e->getLine()." ".$e->getFile()); // si hubo un error muere el proceso
                }
            return self::$db_conn; // retorn el valor de la conexion
            }
        }
		// metodo para desconectar de la base datos y que el servidor no consuma muchos registros
        protected function disconnect(){
            self::$db_conn = null;
        }
    }
?>
