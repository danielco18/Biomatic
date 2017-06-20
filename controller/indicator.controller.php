<?php
    require_once 'model/indicator.model.php'; // requiero el modelo del indicador

    class IndicatorController{
        private $IndicatorM; // creo una variable privada para que solo esta en la clase IndicatorController para despues instanciar el modelo en dichar variable

        public function __CONSTRUCT(){ // creo el constructor
            $this->IndicatorM = new IndicatorModel(); // instancio la clase del model indicador para acceder a sus metodos
        }

        public function main(){
            if (!isset($_SESSION["user"]["name"])) { // si no existe sesion lo manda al login
                header("Location: home");
            }
            // como todo se trabaja bajo la arquitectura de software MVC, la vista se divide en capas que despues se van requiriendo dependiendo de lo que se llame
            require_once 'views/include/header.php'; // requiero el header
            require_once 'views/modules/indicator_mod/indicator_manage/add.indicator.php'; // requiero el agregar indicador
            require_once 'views/include/footer.php'; // requiero el footer
        }

        public function create(){
            $data = $_POST["data"]; // recibo por POST un arreglo data que esta en el formulario de agregar indicador
            $data[20] = randAlphaNum('30'); // como el formulario no tiene token se le agregar una posicion al array $data con el token
            $result = $this->IndicatorM->createInd($data); // llamo al metodo para crear un indicador del model
            header("Location: index.php?c=indicator&msn=$result"); // llevo el mensaje de que se creo con exito
        }

        public function update(){
            if (!isset($_SESSION["user"]["name"])) { // si no existe sesion lo manda al login
                header("Location: home");
            }
            $data = $_GET["token"]; // mando el token por URL y lo capturo en la variable $data para poder actualizar datos segundo el token
            require_once 'views/include/header.php'; // requiero el header
            require_once 'views/modules/indicator_mod/indicator_manage/update.indicator.php'; // requiero el actualizar indicador
            require_once 'views/include/footer.php'; // requiero el footer
        }

        public function updateData(){
            $data = $_POST["data"]; // recibo por POST un arreglo data que esta en el formulario de actualizar indicador
            $result = $this->IndicatorM->updateInd($data); // llamo al metodo para modificar un indicador del model
            header("Location: index.php?c=indicator&msn=$result"); // llevo el mensaje de que se modifico con exito
        }

        public function delete(){
            $data = $_GET["token"]; // mando el token por URL y lo capturo en la variable $data para poder eliminar datos segundo el token
            $result = $this->IndicatorM->deleteInd($data); // llamo al metodo para modificar un indicador del model
            header("Location: index.php?c=indicator&msn=$result"); // llevo el mensaje de que se modifico con exito
        }
    }
?>
