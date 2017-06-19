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

        public function data(){
            $readProductosIn2016 = $this->ProductosM->readProductosIn2016();
            $readProductosIn2017 = $this->ProductosM->readProductosIn2017();
            $readProductosIn2018 = $this->ProductosM->readProductosIn2018();
            $readProductosTotal = $this->ProductosM->readProductosTotal();
            $data = array(  $readProductosIn2016,
                            $readProductosIn2017,
                            $readProductosIn2018,
                            $readProductosTotal
                        );
            //echo $data[0]["2012"][0];
            echo json_encode($data);
        }
    }
?>
