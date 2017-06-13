<?php

    class UserModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }
        // ESTE METODO ES PARA REGISTRAR UN USUARIO
        public function createUser($data){
            try {
                $sql = "INSERT INTO user VALUES(?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[5],$data[0],$data[1],$data[2],$data[3]));
                $result = "Registro exitoso";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
            }
        // ESTE METODO ES PARA LEER TODOS LOS USUARIOS
        public function readUser(){
            try {
                $sql = "SELECT * FROM user ORDER BY user_name";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // ESTE METODO ES PARA LEER UN USUARIO POR EMAIL
        public function readUserByEmail($data){
            try {
                $sql = "SELECT * FROM user WHERE user_email = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // ESTE METODO ES PARA ACTUALIZAR LA INFORMACION DEL USUARIO
        public function updateUser($data){
            try {
                $sql = "UPDATE user SET user_name = ?, user_lastName = ?, user_email = ?, user_password = ? WHERE user_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[0],$data[0],$data[0],$data[0]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // ESTE METODO ES PARA ELIMINAR LOS DATOS DE UN USUARIO
        public function deleteUser($data){
            try {
                $sql = "DELETE FROM user WHERE user_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = "Datos eliminados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }

?>
