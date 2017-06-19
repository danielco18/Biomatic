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

        public function data(){
            $readSemilleroIn2012 = $this->SemilleroM->readSemilleroIn2012();
            $readSemilleroIn2013 = $this->SemilleroM->readSemilleroIn2013();
            $readSemilleroIn2014 = $this->SemilleroM->readSemilleroIn2014();
            $readSemilleroIn2015 = $this->SemilleroM->readSemilleroIn2015();
            $readSemilleroIn2016 = $this->SemilleroM->readSemilleroIn2016();
            $readSemilleroIn2017 = $this->SemilleroM->readSemilleroIn2017();
            $readSemilleroIn2018 = $this->SemilleroM->readSemilleroIn2018();
            $readSemilleroTotal = $this->SemilleroM->readSemilleroTotal();
            $readNivelTotal = $this->SemilleroM->readNivelTotal();
            $data = array(  $readSemilleroIn2012,
                            $readSemilleroIn2013,
                            $readSemilleroIn2014,
                            $readSemilleroIn2015,
                            $readSemilleroIn2016,
                            $readSemilleroIn2017,
                            $readSemilleroIn2018,
                            $readSemilleroTotal,
                            $readNivelTotal
                        );
            echo json_encode($data);
        }
    }
?>
