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
                $sql = "UPDATE ponencias SET pon_claseEvento = ?, pon_nombrePonencia = ?, pon_nombreEvento = ?, pon_tipoPonencia = ?, pon_autores = ?, pon_programasFormacion = ?, dates = ? WHERE pon_code = ?";
                $query = $this->pdo->prepare($sql);
$query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));
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


        // Gráficas
        // metodos para consultar datos para mostrar en las gráficas
        public function readPonenciasRegionales2012(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2012'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2012(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2012'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2012(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2012'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2013(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2013'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2013(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2013'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2013(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2013'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2014(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2014'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2014(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2014'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2014(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2014'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2015(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2015'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2015(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2015'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2015(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2015'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2016(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2016'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2016(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2016'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2016(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2016'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2017(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2017'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2017(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2017'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2017(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2017'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasRegionales2018(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Regional' AND dates = '2018'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasNacionales2018(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Nacional' AND dates = '2018'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasInternacionales2018(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias
                WHERE pon_claseEvento = 'Internacional' AND dates = '2018'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readPonenciasOral(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias WHERE pon_tipoPonencia = 'Oral'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die();
            }
            return $result;
        }

        public function readPonenciasPoster(){
            try {
                $sql = "SELECT COUNT(pon_code) FROM ponencias WHERE pon_tipoPonencia = 'Póster'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die();
            }
            return $result;
        }

        // aca terminan los metodos de consultas para las gráficas
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
