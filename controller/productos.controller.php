<?php
    require_once 'model/productos.model.php';

    class ProductosController{
        private $ProductosM;

        public function __CONSTRUCT(){
            $this->ProductosM = new ProductosModel();
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/productos_manage/add.productos.php';
            require_once 'views/include/footer.php';
        }

        public function charts(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/productos_manage/charts.productos.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[8] = randAlphaNum('30');
            $data[9] = "pksMyCi6C1ylY1jJqAbXlbehyL5oqP";
            $result = $this->ProductosM->createProductos($data);
            header("Location: index.php?c=productos&msn=$result");
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            $data = $_GET["token"];
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/productos_manage/update.productos.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ProductosM->updateProductos($data);
            header("Location: index.php?c=productos&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->ProductosM->deleteProductos($data);
            header("Location: index.php?c=productos&msn=$result");
        }
        // es el mismo metodo que el anterior pero minificado
        public function data(){
            // Metodo para saber cuantos productos se ingresaron en 2016
            $readProductosIn2016 = $this->ProductosM->readProductosIn2016();
            // Metodo para saber cuantos productos se ingresaron en 2017
            $readProductosIn2017 = $this->ProductosM->readProductosIn2017();
            // Metodo para saber cuantos productos se ingresaron en 2018
            $readProductosIn2018 = $this->ProductosM->readProductosIn2018();
            // Metodo para saber cuantos productos se ingresaron hasta el momento
            $readProductosTotal = $this->ProductosM->readProductosTotal();
            // declaro una variable data para enviar los datos que cree arriba
            $data = array(  $readProductosIn2016,
                            $readProductosIn2017,
                            $readProductosIn2018,
                            $readProductosTotal
                        );
            // envio por JSON una matriz para leerla en JavaScript y mostrarla en la vista del usuario
            echo json_encode($data);
        }
    }
?>
