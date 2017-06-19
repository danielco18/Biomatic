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

        public function readProyectosIn2012(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2012' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2012'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2012' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2012' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2013(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2013' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2013'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2013' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2013' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2014(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2014' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2014'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2014' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2014' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2015(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2015' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2015'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2015' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2015' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2016(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2016' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2016'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2016' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2016' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2017(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2017' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2017'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2017' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2017' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosIn2018(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA'  AND dates = 
                            '2018' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' AND dates = '2018'  THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades'  AND dates = '2018' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2018' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readProyectosTotal(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN np_Entidad= 'SENA' THEN 1 ELSE 0 END) SENA,
                            SUM(CASE WHEN np_Entidad = 'Cofinanciados x Empresas' THEN 1 ELSE 0 END) Cofinanciados, 
                            SUM(CASE WHEN np_Entidad= 'Cofinanciación de otras entidades' THEN 1 ELSE 0 END) Cofinanciación
                        FROM n_proyectos ORDER BY np_Entidad";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('Total' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
