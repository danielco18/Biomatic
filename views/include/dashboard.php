<div class="dashboard-container">

        <?php require_once 'views/include/navbar.php';?>
        <div class="info-container">
            <div class="text-container info-text-container">
                <div class="menu-responsive hidden-md-up">
                    <i class="material-icons" id="menu-icon">menu</i>
                    <?php require_once 'views/include/navbar-responsive.php';?>
                </div>
                <h3 class="menu-text info-text">
                    <span class="info-title"><?php echo $_SESSION["user"]["name"]." ".$_SESSION["user"]["lastname"]; ?></span>
                    <a href="index.php?c=user&a=close" class="info-icon" >
                        <i class="material-icons">power_settings_new</i>
                    </a>
                </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
