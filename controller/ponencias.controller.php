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

        public function charts(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/ponencias_manage/charts.ponencia.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[7] = randAlphaNum('30');
            $data[8] = "uCfYTfncINM02uiot2hN5Fycu5u4Mw";
            $result = $this->PonenciasM->createPonencias($data);
            header("Location: index.php?c=ponencias&msn=$result");
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
            header("Location: index.php?c=ponencias&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->PonenciasM->deletePonencias($data);
            header("Location: index.php?c=ponencias&msn=$result");
        }
    }
?>
