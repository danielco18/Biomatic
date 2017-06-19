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
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2012' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2012'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2012' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2012' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2012' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2012' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2013(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2013' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2013'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2013' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2013' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2013' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2013' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2014(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2014' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2014'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2014' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2014' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2014' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2014' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2015(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2015' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2015'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2015' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2015' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2015' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2015' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2016(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2016' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2016'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2016' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2016' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2016' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2016' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2017(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2017' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2017'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2017' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2017' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2017' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2017' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesIn2018(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'  AND dates = '2018' THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' AND dates = '2018'  THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  AND dates = '2018' THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  AND dates = '2018' THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  AND dates = '2018' THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2018' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }

        public function readPublicacionesTotal(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Artículos'   THEN 1 ELSE 0 END) Artículos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Capítulos' THEN 1 ELSE 0 END) Capítulos, 
                            SUM(CASE WHEN pub_tipoPublicacion = 'Libros'  THEN 1 ELSE 0 END) Libros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Otros'  THEN 1 ELSE 0 END) Otros,
                            SUM(CASE WHEN pub_tipoPublicacion = 'Tesis'  THEN 1 ELSE 0 END) Tesis
                        FROM publicacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('Total' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4]]
                            );
            return $result;
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
