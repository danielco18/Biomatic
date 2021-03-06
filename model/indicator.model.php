<?php

    class IndicatorModel extends DataBase{ // heredo la clase DataBase porque los metodo desconectar y conectar estan protegidos
        private $pdo; // declaro una variable privada pdo para acceder a la conexion, los errores, y los metodos de la clase PDO
        // Declaro el constructor
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect(); // llamo el metodo connect de la clase DataBase para conectarme a la base de datos
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // declaro los posibles mensajes de error al momento de ejecutar sentencias DML
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }
        // metodo para crear un indicador
        public function createInd($data){
            try {
                $sql = "INSERT INTO indicator VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[20],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],$data[15],$data[16],$data[17],$data[18],$data[19]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metedo para consultar un indicador
        public function readInd(){
            try {
                $sql = "SELECT * FROM indicator INNER JOIN type_indicator ON (ind_typeIn_code = typeIn_code ) ORDER BY ind_nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metodo para leer el tipo indicador
        public function readTypeInd(){
            try {
                $sql = "SELECT * FROM type_indicator ORDER BY typeIn_name";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metodo para leer un indicador por codigo
        public function readIndByCode($data){
            try {
                $sql = "SELECT * FROM indicator WHERE ind_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metodo para modificar datos del indicador
        public function updateInd($data){
            try {
                $sql = "UPDATE indicator SET
                        ind_typeIn_code = ?,
                        ind_nombre = ?,
                        ind_fechaActualizacion = ?,
                        ind_categoria = ?,
                        ind_subCategoria = ?,
                        ind_definicion = ?,
                        ind_objetivo = ?,
                        ind_metodoMedicion = ?,
                        ind_unidadMedida = ?,
                        ind_formulaMedida = ?,
                        ind_variable1 = ?,
                        ind_conceptoEstadistico = ?,
                        ind_frecuenciaCalculoVariable = ?,
                        ind_fuenteInformacion = ?,
                        ind_serieDisponible = ?,
                        ind_desagracionTematica = ?,
                        ind_desagracionGeografica = ?,
                        ind_limitaciones = ?,
                        ind_responsable = ?,
                        ind_observaciones = ?
                WHERE ind_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],$data[15],$data[16],$data[17],$data[18],$data[19],$data[20]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metodo para eliminar datos de un indicador
        public function deleteInd($data){
            try {
                $sql = "DELETE FROM indicator WHERE ind_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = "Datos eliminados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }
        // metodo destructor para desconectarme de la base de datos
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
