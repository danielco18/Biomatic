<?php

    class PublicacionModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createPublicacion($data){
            try {
                $sql = "INSERT INTO publicacion VALUES (?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[7],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[8]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPublicacion(){
            try {
                $sql = "SELECT * FROM publicacion ORDER BY pub_tipoPublicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPublicacionByCode($data){
            try {
                $sql = "SELECT * FROM publicacion WHERE pub_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updatePublicacion($data){
            try {
                $sql = "UPDATE publicacion SET pub_tipoPublicacion = ?, pub_nombreEditorial = ?, pub_categoria = ?, pub_nombrePublicacion = ?, pub_autores = ?, pub_programasFormacion = ?, dates = ? WHERE pub_code = ?";
                $query = $this->pdo->prepare($sql);
        $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deletePublicacion($data){
            try {
                $sql = "DELETE FROM publicacion WHERE pub_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = "Datos eliminados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        // Gráficas

        public function readPublicacionesIn2012(){
            try {
                $sql = "SELECT pub_tipoPublicacion, COUNT(*) 
                        FROM publicacion 
                        WHERE dates = '2012' 
                        GROUP BY pub_tipoPublicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
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
