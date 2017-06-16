<?php
	date_default_timezone_set('America/Bogota');
  	require_once 'model/db.model.php';
  	require_once 'controller/lib/random.php';
	session_start();
    if (isset($_REQUEST["c"])) {
        $controller = strtolower($_REQUEST["c"]);
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "main";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        call_user_func(array($controller, $action));
    } else {
        $controller = "user";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
		$controller->main();
		if (isset($_SESSION["user"]["name"])) {
			header("Location: type-indicator");
		}
    }

	if (isset($_GET["msn"])) {
		$space = "";
		$success = "success";
	?>
        <script>swal("<?php echo $_GET['msn']; ?>","","success")</script>"
	<?php
    }
?>
