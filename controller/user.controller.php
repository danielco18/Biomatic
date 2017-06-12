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

        public function signIn(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/signIn.php';
            require_once 'views/include/footer.php';
        }

        public function signUp(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/signUp.php';
            require_once 'views/include/footer.php';
        }

        public function validEmailSignUp(){
            $data = $_POST["email"];
            $result = $this->UserM->readUserByEmail($data);
            if (count($result[0]) >= 1) {
                $return = array("El correo ya existe en la aplicación.", false);
            } else {
                $return = array("", true);
            }
            echo json_encode($return);
        }

        public function create(){
            $data = $_POST["data"];
            $data[5] = randAlphaNum('30');
            if ($data[3] === $data[4]) {
                $data[3] = password_hash($data[3], PASSWORD_DEFAULT);
                $result = $this->UserM->createUser($data);
            } else{
                $result = "Las contraseñas no son iguales";
            }
            echo $result;
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main-dashboard.php';
            require_once 'views/include/footer.php';
        }

    }

?>
