<?php 
    require_once "mysqlDBService.php";
    require_once "viewService.php";
?>
<?php
    class DataController{
        protected $db;

        public function __construct(){
            $this->db = new MySQLDB("localhost", "root", "", "testcsv");
        }

        public function view_data(){
            echo View::createView4('data.php');
        }

        public function view_tables(){
            echo View::createView4('datatables.php');
        }

        public function view_charts(){
            echo View::createView4('datacharts.php');
        }
    }
?>