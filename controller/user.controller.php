<?php
    require_once 'model/user.model.php';

    class UserController{
        private $UserM;

        public function __CONSTRUCT(){
            $this->UserM = new UserModel();
        }
        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main.php';
            require_once 'views/include/footer.php';
        }
        // metodo para mostrar un login
        public function signIn(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/signIn.php';
            require_once 'views/include/footer.php';
        }
        // metodo para mostrar el registro
        public function signUp(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/signUp.php';
            require_once 'views/include/footer.php';
        }
        // metodo para validar el email si existe en la base de datos
        public function validEmailSignUp(){
            $data = $_POST["data"];
            $result = $this->UserM->readUserByEmail($data);
            if (count($result[0]) >= 1) {
                $return = array("El correo ya existe en la aplicación.", false);
            } else {
                $return = array("", true);
            }
            echo json_encode($return);
        }
        // metodo para validar el email si no existe en la base de datos
        public function validEmail(){
            $data = $_POST["data"];
            $response = $this->UserM->readUserByEmail($data);
            if (count($response[0]) <= 0) {
                $return = array("El correo no existe en la aplicación.", false);
            } else {
                $return = array("", true);
            }
            echo json_encode($return);
        }
        // metodo para que el usuario ingrese a la aplicacion
        public function validSignIn(){
            $data = $_POST["data"];
            $userData = $this->UserM->readUserByEmail($data[0]);
            if (password_verify($data[1],$userData["user_password"])) {
                $_SESSION["user"]["token"] = $userData["user_code"];
                $_SESSION["user"]["name"] = $userData["user_name"];
                $_SESSION["user"]["lastname"] = $userData["user_lastName"];
                $_SESSION["user"]["email"] = $userData["user_email"];
                $return = array(true, "type-indicator");
            } else {
                $return = array(false, "Contraseña incorrecta");
            }
            echo json_encode($return);
        }
        // metodo para crear un usuario
        public function create(){
            $data = $_POST["data"];
            $data[5] = randAlphaNum('30');
            if ($data[3] === $data[4]) {
                $data[3] = password_hash($data[3], PASSWORD_DEFAULT);
                $result = $this->UserM->createUser($data);
                $_SESSION["user"]["token"] = $data[5];
                $_SESSION["user"]["name"] = $data[0];
                $_SESSION["user"]["lastname"] = $data[1];
                $_SESSION["user"]["email"] = $data[2];
                $return = array(true,$result,"type-indicator");
            } else{
                $return = array(false,"Las contraseñas no son iguales","");
            }
            echo json_encode($return);
        }
        // metodo para ir a la dashboard
        public function dashboard(){
            header("Location: type-indicator");
        }
        // METODO PARA CERRAR SESION
        public function close(){
            session_destroy();
            header("Location: home");
        }

    }

?>
