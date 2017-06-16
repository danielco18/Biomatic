<?php
    require_once 'model/semillero.model.php';

    class SemilleroController{
        private $SemilleroM;

        public function __CONSTRUCT(){
            $this->SemilleroM = new SemilleroModel();
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/semillero_manage/add.semillero.php';
            require_once 'views/include/footer.php';
        }

        public function charts(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/semillero_manage/charts.semillero.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[15] = randAlphaNum('30');
            $data[16] = "UmxH9zRO5FmB256hROHySkeFXAjkq4";
            $result = $this->SemilleroM->createSemillero($data);
            header("Location: index.php?c=semillero&msn=$result");
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            $data = $_GET["token"];
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/semillero_manage/update.semillero.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->SemilleroM->updateSemillero($data);
            header("Location: index.php?c=semillero&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->SemilleroM->deleteSemillero($data);
            header("Location: index.php?c=semillero&msn=$result");
        }
    }
?>
