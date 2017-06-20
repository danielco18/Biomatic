<?php
	// IMPORTANTE: todos los controladores, modelos y vistas tienen la mismas lógica, para poder ver detallado la explicación los archivos son
	//indicator.controller.php, indicator.model.php, ponencias.controller.php, ponencias.model.php, productos.controller.php, productos.model.php, dentro del modulo indicador, se miran las gestiones de indicador, ponencias y productos
	date_default_timezone_set('America/Bogota'); // Declaro la zona horaria de Colombia
  	require_once 'model/db.model.php'; // Requiero la base de datos para que los modelos tengan la clase DataBase
  	require_once 'controller/lib/random.php'; // Requiero la función para generar un token unico para cada tabla
	session_start(); // Inicializo la sesión para que se puedan crear en un futuro
    if (isset($_REQUEST["c"])) { // Evaluo si existe una variable c(contralador) en la URL
        $controller = strtolower($_REQUEST["c"]); // Si existe el contralador, se guarda en la variable $controller y se iguala a el valor que esta en la URL y se convierte en minúsculas
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "main"; // Acá evaluo si existe la acción y si existe la acción se guarda en la variable $action, sino $action es igual a main porque es la función principal
        require_once "controller/$controller.controller.php"; // requiero el controlador que se llamo en la variable $controller
        $controller = ucwords($controller).'Controller'; // Acá al valor $controller convierto la primera letra en mayúscula y lo concateno con Controller, porque es un estandar para nombrar una Clase
        $controller = new $controller; // instancio el controlador que se paso por la variable c para accedder acceder a todos sus metodos
        call_user_func(array($controller, $action)); // llamo el contralador de la variable $controller y su funcion que esta en la variable $action
    } else { // sino encuentra nada en $_REQUEST["c"] entra en el else
        $controller = "user"; // Acá como no ha llamado ningun contralador se lleva al contralador que tiene el login que es user
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
		$controller->main(); // llamo la función main porque es la principal
		if (isset($_SESSION["user"]["name"])) { // si existe la sesión del usuario lo lleva a la dashboard
			header("Location: type-indicator");
		}
    }

	if (isset($_GET["msn"])) { // Acá muestro los mensajes que tiro por GET
		$space = "";
		$success = "success";
	?>
        <script>swal("<?php echo $_GET['msn']; ?>","","success")</script>"
	<?php
    }
?>
