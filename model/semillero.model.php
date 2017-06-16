<?php

    class SemilleroModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createSemillero($data){
            try {
                $sql = "INSERT INTO semillero_investigacion VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
            $data[15],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],
            $data[7],$data[8],$data[9],$data[10],$data[1],$data[12],$data[13],$data[14],$data[16]
                        ));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readSemillero(){
            try {
                $sql = "SELECT * FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readSemilleroByCode($data){
            try {
                $sql = "SELECT * FROM semillero_investigacion WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updateSemillero($data){
            try {
                $sql = "UPDATE semillero_investigacion SET
                        semI_nombre = ?,
                        semI_documento = ?,
                        seml_fechaNac = ?,
                        seml_email = ?,
                        seml_celular = ?,
                        seml_usuarioClave = ?,
                        seml_ficha = ?,
                        semI_categoria = ?,
                        semI_fechaIni = ?,
                        semI_fechaFin = ?,
                        semI_proyectos = ?,
                        semI_horasSemanales = ?,
                        semI_productos = ?,
                        dates = ?
                        WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                            $data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],
                            $data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deleteSemillero($data){
            try {
                $sql = "DELETE FROM semillero_investigacion WHERE semI_code = ?";
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
