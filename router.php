<?php
    $url = $_SERVER['REDIRECT_URL'];
	$baseURL = '/Covid19_Korsel';
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
		switch ($url) {
            case $baseURL."/index":
                require_once "controller/indexController.php";
                $ctrl = new IndexController();
                $ctrl->view_index();
            break;
            case $baseURL."/public":
                require_once "controller/publicController.php";
                $ctrl = new PublicController();
                $ctrl->view_public();
            break;
            case $baseURL."/admin":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->view_admin();    
            break;
            case $baseURL."/admin/logout":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->logout();
            break;
            default:
				echo '404 Not Found';
			break;
        }
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		switch ($url) {
            case $baseURL."/admin/login":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->login();
            break;
            case $baseURL."/admin/addPatient":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->add_patient();
            break;
            case $baseURL."/admin/addSearchtrend":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->add_searchtrend();
            break;
            case $baseURL."/admin/addPolicy":
                require_once "controller/adminController.php";
                $ctrl = new AdminController();
                $ctrl->add_policy();
            break;
            default:
				echo '404 Not Found';
			break;
        }
    }
?>