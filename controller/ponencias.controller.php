<?php
    require_once 'model/ponencias.model.php';

    class PonenciasController{
        private $PonenciasM;

        public function __CONSTRUCT(){
            $this->PonenciasM = new PonenciasModel();
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/ponencias_manage/add.ponencia.php';
            require_once 'views/include/footer.php';
        }

        public function charts(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/ponencias_manage/charts.ponencia.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[7] = randAlphaNum('30');
            $data[8] = "uCfYTfncINM02uiot2hN5Fycu5u4Mw";
            $result = $this->PonenciasM->createPonencias($data);
            header("Location: index.php?c=ponencias&msn=$result");
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) {
                header("Location: home");
            }
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

        public function data(){
            $Regionales2012 = $this->PonenciasM->readPonenciasRegionales2012();
            $Nacionales2012 = $this->PonenciasM->readPonenciasNacionales2012();
            $Internacionales2012 = $this->PonenciasM->readPonenciasInternacionales2012();

            $Regionales2013 = $this->PonenciasM->readPonenciasRegionales2013();
            $Nacionales2013 = $this->PonenciasM->readPonenciasNacionales2013();
            $Internacionales2013 = $this->PonenciasM->readPonenciasInternacionales2013();

            $Regionales2014 = $this->PonenciasM->readPonenciasRegionales2014();
            $Nacionales2014 = $this->PonenciasM->readPonenciasNacionales2014();
            $Internacionales2014 = $this->PonenciasM->readPonenciasInternacionales2014();

            $Regionales2015 = $this->PonenciasM->readPonenciasRegionales2015();
            $Nacionales2015 = $this->PonenciasM->readPonenciasNacionales2015();
            $Internacionales2015 = $this->PonenciasM->readPonenciasInternacionales2015();

            $Regionales2016 = $this->PonenciasM->readPonenciasRegionales2016();
            $Nacionales2016 = $this->PonenciasM->readPonenciasNacionales2016();
            $Internacionales2016 = $this->PonenciasM->readPonenciasInternacionales2016();

            $Regionales2017 = $this->PonenciasM->readPonenciasRegionales2017();
            $Nacionales2017 = $this->PonenciasM->readPonenciasNacionales2017();
            $Internacionales2017 = $this->PonenciasM->readPonenciasInternacionales2017();

            $Regionales2018 = $this->PonenciasM->readPonenciasRegionales2018();
            $Nacionales2018 = $this->PonenciasM->readPonenciasNacionales2018();
            $Internacionales2018 = $this->PonenciasM->readPonenciasInternacionales2018();

            $ponenciaOral = $this->PonenciasM->readPonenciasOral();
            $ponenciaPoster = $this->PonenciasM->readPonenciasPoster();
            echo json_encode(array(
                "2012" => [$Regionales2012[0][0],$Nacionales2012[0][0],$Internacionales2012[0][0]],
                "2013" => [$Regionales2013[0][0],$Nacionales2013[0][0],$Internacionales2013[0][0]],
                "2014" => [$Regionales2014[0][0],$Nacionales2014[0][0],$Internacionales2014[0][0]],
                "2015" => [$Regionales2015[0][0],$Nacionales2015[0][0],$Internacionales2015[0][0]],
                "2016" => [$Regionales2016[0][0],$Nacionales2016[0][0],$Internacionales2016[0][0]],
                "2017" => [$Regionales2017[0][0],$Nacionales2017[0][0],$Internacionales2017[0][0]],
                "2018" => [$Regionales2018[0][0],$Nacionales2018[0][0],$Internacionales2018[0][0]],
                "Tipo" => [$ponenciaOral[0][0],$ponenciaPoster[0][0]]
                        ));
        }
    }
?>
