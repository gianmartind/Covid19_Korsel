<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/Covid19_Korsel';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        case $baseURL . "/index":
            require_once "controller/indexController.php";
            $ctrl = new IndexController();
            $ctrl->view_index();
            break;
        case $baseURL . "/about":
            require_once "controller/indexController.php";
            $ctrl = new IndexController();
            $ctrl->view_about();
            break;
        case $baseURL . "/data":
            require_once "controller/dataController.php";
            $ctrl = new DataController();
            $ctrl->view_data();
            break;
        case $baseURL . "/datatables":
            require_once "controller/dataController.php";
            $ctrl = new DataController();
            $ctrl->view_tables();
            break;
        case $baseURL . "/datacharts":
            require_once "controller/dataController.php";
            $ctrl = new DataController();
            $ctrl->view_charts();
            break;
        case $baseURL . "/admin/logout":
            require_once "controller/adminController.php";
            $ctrl = new AdminController();
            $ctrl->logout();
            break;
        case $baseURL . "/admin/login":
            require_once "controller/adminController.php";
            $userCtrl2 = new adminController();
            $userCtrl2->view_login();
            break;
        case $baseURL . "/admin":
            require_once "controller/adminController.php";
            $userCtrl2 = new adminController();
            $userCtrl2->view_admin();
            break;
        default:
            echo '404 Not Found';
            break;
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($url) {
        case $baseURL . "/admin/check":
            require_once "controller/adminController.php";
            $userCtrl2 = new adminController();
            echo $userCtrl2->login();
            break;
        case $baseURL . "/admin/addPatient":
            require_once "controller/adminController.php";
            $ctrl = new AdminController();
            $ctrl->add_patient();
            break;
        case $baseURL . "/admin/addSearchtrends":
            require_once "controller/adminController.php";
            $ctrl = new AdminController();
            $ctrl->add_searchtrend();
            break;
        case $baseURL . "/admin/addPolicy":
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
