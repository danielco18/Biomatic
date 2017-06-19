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

        public function data(){

            $readPublicacionesIn2012 = $this->PublicacionM->readPublicacionesIn2012();
            $readPublicacionesIn2013 = $this->PublicacionM->readPublicacionesIn2013();
            $readPublicacionesIn2014 = $this->PublicacionM->readPublicacionesIn2014();
            $readPublicacionesIn2015 = $this->PublicacionM->readPublicacionesIn2015();
            $readPublicacionesIn2016 = $this->PublicacionM->readPublicacionesIn2016();
            $readPublicacionesIn2017 = $this->PublicacionM->readPublicacionesIn2017();
            $readPublicacionesIn2018 = $this->PublicacionM->readPublicacionesIn2018();
            $readPublicacionesTotal = $this->PublicacionM->readPublicacionesTotal();
            $data = array(  $readPublicacionesIn2012,
                            $readPublicacionesIn2013,
                            $readPublicacionesIn2014,
                            $readPublicacionesIn2015,
                            $readPublicacionesIn2016,
                            $readPublicacionesIn2017,
                            $readPublicacionesIn2018,
                            $readPublicacionesTotal
                        );
            //echo $data[0]["2012"][0];
            echo json_encode($data);
        }
    }
?>
