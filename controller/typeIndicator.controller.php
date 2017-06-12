<?php  
    require_once 'model/typeIndicator.model.php';

    class TypeindicatorController{
        private $TypeIndM;

        public function __CONSTRUCT(){
            $this->TypeIndM = new TypeindicatorModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/typeIndicator_manage/add.typeInd.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[3] = randAlphaNum('30');
            $result = $this->TypeIndM->createTypeInd($data);
            echo $result;
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/typeIndicator_manage/update.typeInd.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->TypeIndM->updateTypeInd($data);
            header("Location: index.php?c=typeIndicator&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->TypeIndM->deleteTypeInd($data);
            echo $result;
        }
    }
?>