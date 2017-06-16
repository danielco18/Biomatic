<?php
    require_once 'model/proyectos.model.php';

    class ProyectosController{
        private $ProyectosM;

        public function __CONSTRUCT(){
            $this->ProyectosM = new ProyectosModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/proyectos_manage/add.proyecto.php';
            require_once 'views/include/footer.php';
        }

        public function charts(){
            require_once 'views/include/header.php';
            require_once 'views/modules/indicator_mod/proyectos_manage/charts.proyecto.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[18] = randAlphaNum('30');
            $data[19] = "7iKfiK9WWNeWihUQ4wHLtoxhfdUuAP";
            $result = $this->ProyectosM->createProyectos($data);
            header("Location: index.php?c=proyectos&msn=$result");
        }

        public function update(){
          $data = $_GET["token"];
          require_once 'views/include/header.php';
          require_once 'views/modules/indicator_mod/proyectos_manage/update.proyecto.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ProyectosM->updateProyectos($data);
            header("Location: index.php?c=proyectos&msn=$result");
        }

        public function delete(){
            $data = $_GET["token"];
            $result = $this->ProyectosM->deleteProyectos($data);
            header("Location: index.php?c=proyectos&msn=$result");
        }
    }
?>
