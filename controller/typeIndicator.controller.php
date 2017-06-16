<?php
    require_once 'model/typeIndicator.model.php';

    class TypeindicatorController{
        private $TypeIndM;

        public function __CONSTRUCT(){
            $this->TypeIndM = new TypeindicatorModel();
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/typeIndicator_manage/add.typeInd.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[3] = randAlphaNum('30');
            $result = $this->TypeIndM->createTypeInd($data);
            header("Location: index.php?c=typeIndicator&msn=$result");
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
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
            header("Location: index.php?c=typeIndicator&msn=$result");
        }
    }
?>
