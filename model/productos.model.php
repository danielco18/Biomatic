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
        // Se crea solo un metodo para consultar los tipo de productos por año y se retorna una matriz
        public function readProductosIn2016(){
            try {
                $sql = "SELECT
                           SUM(CASE WHEN pro_tipoProducto = 'Nueva variedad'  AND dates = '2016' THEN 1 ELSE 0 END) NuevaVariedad,
                           SUM(CASE WHEN pro_tipoProducto = 'Producto tecnológico' AND dates = '2016'  THEN 1 ELSE 0 END) ProductoTecno,
                           SUM(CASE WHEN pro_tipoProducto = 'Prototipo'  AND dates = '2016' THEN 1 ELSE 0 END) Prototipo,
                           SUM(CASE WHEN pro_tipoProducto = 'Signos distintivos'  AND dates = '2016' THEN 1 ELSE 0 END) SignosDis,
                           SUM(CASE WHEN pro_tipoProducto = 'Software'  AND dates = '2016' THEN 1 ELSE 0 END) Software,
                           SUM(CASE WHEN pro_tipoProducto = 'Patente'  AND dates = '2016' THEN 1 ELSE 0 END) Patente,
                           SUM(CASE WHEN pro_tipoProducto = 'Modelos de utilidad'  AND dates = '2016' THEN 1 ELSE 0 END) ModelosUtil,
                           SUM(CASE WHEN pro_tipoProducto = 'Talleres de creación'  AND dates = '2016' THEN 1 ELSE 0 END) TalleresCrea,
                           SUM(CASE WHEN pro_tipoProducto = 'Consultoría científico tecnológica e informe técnico'  AND dates = '2016' THEN 1 ELSE 0 END) Consultoria,
                           SUM(CASE WHEN pro_tipoProducto = 'Diseño Industrial'  AND dates = '2016' THEN 1 ELSE 0 END) DiseñoIndustrial,
                           SUM(CASE WHEN pro_tipoProducto = 'Innovación de proceso o procedimiento'  AND dates = '2016' THEN 1 ELSE 0 END) Innovación
                        FROM productos";
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
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10]]
                            );
            return $result;
        }

        public function readProductosIn2017(){
            try {
                $sql = "SELECT
                           SUM(CASE WHEN pro_tipoProducto = 'Nueva variedad'  AND dates = '2017' THEN 1 ELSE 0 END) NuevaVariedad,
                           SUM(CASE WHEN pro_tipoProducto = 'Producto tecnológico' AND dates = '2017'  THEN 1 ELSE 0 END) ProductoTecno,
                           SUM(CASE WHEN pro_tipoProducto = 'Prototipo'  AND dates = '2017' THEN 1 ELSE 0 END) Prototipo,
                           SUM(CASE WHEN pro_tipoProducto = 'Signos distintivos'  AND dates = '2017' THEN 1 ELSE 0 END) SignosDis,
                           SUM(CASE WHEN pro_tipoProducto = 'Software'  AND dates = '2017' THEN 1 ELSE 0 END) Software,
                           SUM(CASE WHEN pro_tipoProducto = 'Patente'  AND dates = '2017' THEN 1 ELSE 0 END) Patente,
                           SUM(CASE WHEN pro_tipoProducto = 'Modelos de utilidad'  AND dates = '2017' THEN 1 ELSE 0 END) ModelosUtil,
                           SUM(CASE WHEN pro_tipoProducto = 'Talleres de creación'  AND dates = '2017' THEN 1 ELSE 0 END) TalleresCrea,
                           SUM(CASE WHEN pro_tipoProducto = 'Consultoría científico tecnológica e informe técnico'  AND dates = '2017' THEN 1 ELSE 0 END) Consultoria,
                           SUM(CASE WHEN pro_tipoProducto = 'Diseño Industrial'  AND dates = '2017' THEN 1 ELSE 0 END) DiseñoIndustrial,
                           SUM(CASE WHEN pro_tipoProducto = 'Innovación de proceso o procedimiento'  AND dates = '2017' THEN 1 ELSE 0 END) Innovación
                        FROM productos";
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
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10]]
                            );
            return $result;
        }

        public function readProductosIn2018(){
            try {
                $sql = "SELECT
                           SUM(CASE WHEN pro_tipoProducto = 'Nueva variedad'  AND dates = '2018' THEN 1 ELSE 0 END) NuevaVariedad,
                           SUM(CASE WHEN pro_tipoProducto = 'Producto tecnológico' AND dates = '2018'  THEN 1 ELSE 0 END) ProductoTecno,
                           SUM(CASE WHEN pro_tipoProducto = 'Prototipo'  AND dates = '2018' THEN 1 ELSE 0 END) Prototipo,
                           SUM(CASE WHEN pro_tipoProducto = 'Signos distintivos'  AND dates = '2018' THEN 1 ELSE 0 END) SignosDis,
                           SUM(CASE WHEN pro_tipoProducto = 'Software'  AND dates = '2018' THEN 1 ELSE 0 END) Software,
                           SUM(CASE WHEN pro_tipoProducto = 'Patente'  AND dates = '2018' THEN 1 ELSE 0 END) Patente,
                           SUM(CASE WHEN pro_tipoProducto = 'Modelos de utilidad'  AND dates = '2018' THEN 1 ELSE 0 END) ModelosUtil,
                           SUM(CASE WHEN pro_tipoProducto = 'Talleres de creación'  AND dates = '2018' THEN 1 ELSE 0 END) TalleresCrea,
                           SUM(CASE WHEN pro_tipoProducto = 'Consultoría científico tecnológica e informe técnico'  AND dates = '2018' THEN 1 ELSE 0 END) Consultoria,
                           SUM(CASE WHEN pro_tipoProducto = 'Diseño Industrial'  AND dates = '2018' THEN 1 ELSE 0 END) DiseñoIndustrial,
                           SUM(CASE WHEN pro_tipoProducto = 'Innovación de proceso o procedimiento'  AND dates = '2018' THEN 1 ELSE 0 END) Innovación
                        FROM productos";
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
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10]]
                            );
            return $result;
        }

        public function readProductosTotal(){
            try {
                $sql = "SELECT
                           SUM(CASE WHEN pro_tipoProducto = 'Nueva variedad'  THEN 1 ELSE 0 END) NuevaVariedad,
                           SUM(CASE WHEN pro_tipoProducto = 'Producto tecnológico' THEN 1 ELSE 0 END) ProductoTecno,
                           SUM(CASE WHEN pro_tipoProducto = 'Prototipo' THEN 1 ELSE 0 END) Prototipo,
                           SUM(CASE WHEN pro_tipoProducto = 'Signos distintivos' THEN 1 ELSE 0 END) SignosDis,
                           SUM(CASE WHEN pro_tipoProducto = 'Software'
                                THEN 1 ELSE 0 END) Software,
                           SUM(CASE WHEN pro_tipoProducto = 'Patente'
                                THEN 1 ELSE 0 END) Patente,
                           SUM(CASE WHEN pro_tipoProducto = 'Modelos de utilidad' THEN 1 ELSE 0 END) ModelosUtil,
                           SUM(CASE WHEN pro_tipoProducto = 'Talleres de creación' THEN 1 ELSE 0 END) TalleresCrea,
                           SUM(CASE WHEN pro_tipoProducto = 'Consultoría científico tecnológica e informe técnico' THEN 1 ELSE 0 END) Consultoria,
                           SUM(CASE WHEN pro_tipoProducto = 'Diseño Industrial' THEN 1 ELSE 0 END) DiseñoIndustrial,
                           SUM(CASE WHEN pro_tipoProducto = 'Innovación de proceso o procedimiento' THEN 1 ELSE 0 END) Innovación
                        FROM productos";
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
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10]]
                            );
            return $result;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
