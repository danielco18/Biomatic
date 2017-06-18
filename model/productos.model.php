<?php

    class ProductosModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createProductos($data){
            try {
                $sql = "INSERT INTO productos VALUES (?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[8],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[9]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readProductos(){
            try {
                $sql = "SELECT * FROM productos ORDER BY pro_nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readProductosByCode($data){
            try {
                $sql = "SELECT * FROM productos WHERE pro_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updateProductos($data){
            try {
                $sql = "UPDATE productos SET 
                        pro_nombre = ?,
                        pro_tipoProducto = ?,
                        pro_autores = ?, 
                        pro_programaFormacion = ?, 
                        pro_proyectosAsociados = ?, 
                        pro_horasSemales = ?, 
                        pro_Productos = ?, 
                        dates = ? 
                        WHERE pro_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deleteProductos($data){
            try {
                $sql = "DELETE FROM productos WHERE pro_code = ?";
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
