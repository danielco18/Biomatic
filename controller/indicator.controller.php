<?php
    require_once 'model/indicator.model.php';

    class IndicatorController{
        private $IndicatorM;

        public function __CONSTRUCT(){
            $this->IndicatorM = new IndicatorModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/indicator_manage/add.indicator.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[20] = randAlphaNum('30');
            $result = $this->IndicatorM->createInd($data);
            echo $result;
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/indicator_manage/update.indicator.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->IndicatorM->updateInd($data);
            header("Location: index.php?c=indicator&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->IndicatorM->deleteInd($data);
            echo $result;
        }
    }
?>
