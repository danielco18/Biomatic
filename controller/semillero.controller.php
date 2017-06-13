<?php
    require_once 'model/semillero.model.php';

    class SemilleroController{
        private $SemilleroM;

        public function __CONSTRUCT(){
            $this->SemilleroM = new SemilleroModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/semillero_manage/add.semillero.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[20] = randAlphaNum('30');
            $result = $this->SemilleroM->createSemillero($data);
            echo $result;
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/semillero_manage/update.semillero.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->SemilleroM->updateSemillero($data);
            echo $result;
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->SemilleroM->deleteSemillero($data);
            echo $result;
        }
    }
?>
