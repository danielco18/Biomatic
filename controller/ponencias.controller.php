<?php
    require_once 'model/ponencias.model.php';

    class PonenciasController{
        private $PonenciasM;

        public function __CONSTRUCT(){
            $this->PonenciasM = new PonenciasModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/ponencias_manage/add.ponencia.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[20] = randAlphaNum('30');
            $result = $this->PonenciasM->createPonencias($data);
            echo $result;
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/ponencias_manage/update.ponencia.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->PonenciasM->updatePonencias($data);
            echo $result;
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->PonenciasM->deletePonencias($data);
            echo $result;
        }
    }
?>
