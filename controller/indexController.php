<?php 
    require_once "controller/mysqlDBService.php"
    require_once "controller/viewService.php"
    require_once "model/IndexData.php"
?>
<?php
    class IndexController{
        protected $db;

        public function __construct(){
            $this->db = new MySQLDB("localhost", "root", "", "covidkorea");
        }

        public function viewIndex(){
            $indexData = $this->getIndexData();
            viewService::createView3("index.php", [
                "indexData" => $indexData
            ]);
        }

        public function getIndexData(){
            $query = "SELECT count(*) as total, sum(state = 'released') as released, sum(state = 'deceased') as deceased, count(DISTINCT country) as cntry 
            FROM `patientinfo` 
            WHERE country = 'Korea'";
            $query_result = $this->db->executeSelectQuery($query);
            foreach ($query_result as $key => $value) {
                $result[] = new IndexData($value['total'], $value['released'], $value['deceased'], $value['cntry']);
            }
            return $result;
        }
    }
?>