<?php
    require_once 'model/publicacion.model.php';

    class PublicacionController{
        private $PublicacionM;

        public function __CONSTRUCT(){
            $this->PublicacionM = new PublicacionModel();
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/publicacion_manage/add.publicacion.php';
            require_once 'views/include/footer.php';
        }

        public function charts(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/publicacion_manage/charts.publicacion.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[7] = randAlphaNum('30');
            $data[8] = "V0QccldRsCzJ3iZ4Pl5A7eVtMW6t9V";
            $result = $this->PublicacionM->createPublicacion($data);
            header("Location: index.php?c=publicacion&msn=$result");
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            $data = $_GET["token"];
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/publicacion_manage/update.publicacion.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->PublicacionM->updatePublicacion($data);
            header("Location: index.php?c=publicacion&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->PublicacionM->deletePublicacion($data);
            header("Location: index.php?c=publicacion&msn=$result");
        }
    }
?>
