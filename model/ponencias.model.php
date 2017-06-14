<?php

    class PonenciasModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createPonencias($data){
            try {
                $sql = "INSERT INTO ponencias VALUES (?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[7],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[8]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonencias(){
            try {
                $sql = "SELECT * FROM ponencias ORDER BY pon_nombrePonencia";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasByCode($data){
            try {
                $sql = "SELECT * FROM ponencias WHERE pon_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updatePonencias($data){
            try {
                $sql = "UPDATE ponencias SET pon_claseEvento = ?, pon_nombrePonencia = ?, pon_nombreEvento = ?, pon_tipoPonencia = ?, pon_autores = ?, pon_programasFormacion = ? WHERE pon_code = ?";
                $query = $this->pdo->prepare($sql);
        $query->execute(array($data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deletePonencias($data){
            try {
                $sql = "DELETE FROM ponencias WHERE pon_code = ?";
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
