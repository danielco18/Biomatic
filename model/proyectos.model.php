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
                $sql = "INSERT INTO n_proyectos VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                        $data[19],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],
                        $data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],
                        $data[15],$data[16],$data[17],$data[18],$data[20]
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
                $sql = "UPDATE n_proyectos SET
                        np_tipoInvestigacion = ?,
                        np_tituloInvestigacion = ?,
                        np_alcanceInvestigacion = ?,
                        np_Entidad = ?,
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
                        dates = ?,
                        np_fechaInicio = ?,
                        np_fechaFin = ?
                        WHERE np_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                $data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],
                $data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],$data[15],
                $data[16],$data[17],$data[18],$data[19]));
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
