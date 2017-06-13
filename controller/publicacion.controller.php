<?php
    require_once 'model/publicacion.model.php';

    class PublicacionController{
        private $PublicacionM;

        public function __CONSTRUCT(){
            $this->PublicacionM = new PublicacionModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/publicacion_manage/add.publicacion.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[20] = randAlphaNum('30');
            $result = $this->PublicacionM->createPublicacion($data);
            echo $result;
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/publicacion_manage/update.publicacion.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->PublicacionM->updatePublicacion($data);
            echo $result;
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->PublicacionM->deletePublicacion($data);
            echo $result;
        }
    }
?>
