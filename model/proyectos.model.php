<?php

    class ProyectosModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createProyectos($data){
            try {
                $sql = "INSERT INTO n_proyectos VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                        $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                        $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                        $data[0],$data[0],$data[0]
                        ));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readProyectos(){
            try {
                $sql = "SELECT * FROM n_proyectos ORDER BY np_tituloInvestigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readProyectosByCode($data){
            try {
                $sql = "SELECT * FROM n_proyectos WHERE np_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updateProyectos($data){
            try {
                $sql = "UPDATE np_proyectos SET
                        np_tipoInvestigacion = ?,
                        np_tituloInvestigacion = ?,
                        np_alcanceInvestigacion = ?,
                        np_institucion = ?,
                        np_caracterInstitucion = ?,
                        np_investigadores = ?,
                        np_coInvestigadores = ?,
                        np_aprendicesInvolucrados = ?,
                        np_nombreyDocumento = ?,
                        np_programaFormAprendices = ?,
                        np_soporte = ?,
                        np_objetivosInvestigacion = ?,
                        np_resultadosEsperados = ?,
                        np_resultadosObtenidos = ?,
                        np_cobertura = ?,
                        np_fechaInicio = ?,
                        np_fechaFin = ?
                        WHERE np_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                $data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],$data[0],
                $data[0],$data[0]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deleteProyectos($data){
            try {
                $sql = "DELETE FROM n_proyectos WHERE np_code = ?";
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
