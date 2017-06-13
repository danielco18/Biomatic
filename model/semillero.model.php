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
                $sql = "INSERT INTO semillero_investigacion VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                        $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                        $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0]
                        ));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readSemillero(){
            try {
                $sql = "SELECT * FROM semillero_investigacion ORDER BY semI_code";
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
                $sql = "UPDATE np_proyectos SET
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
                        semI_productos = ?
                        WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                            $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                            $data[0],$data[0],$data[0],$data[0],$data[0]));
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
