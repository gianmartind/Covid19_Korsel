<?php
require_once "mysqlDBService.php";
require_once "viewService.php";
?>
<?php
class DataController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "testcsv");
    }

    public function view_data()
    {
        session_start();
        $log_status = "login";
        if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
            $log_status = "logout";
        }
        echo View::createView3('data.php',[
            "log_status" => $log_status
        ]);
    }

    public function view_tables()
    {
        $result1 = $this->patientinfo();
        $result2 = $this->searchtrends();
        $result3 = $this->govpolicy();
        session_start();
        $log_status = "login";
        if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
            $log_status = "logout";
        }
        echo View::createView3('datatables.php', [
            "result1" => $result1,
            "result2" => $result2,
            "result3" => $result3,
            "log_status" => $log_status
        ]);
    }

    public function view_charts()
    {
        $result1 = $this->chart1();
        $result2 = $this->chart2();
        $result3 = $this->chart3();
        $result4 = $this->chart4();
        $result5 = $this->chart5();
        session_start();
        $log_status = "login";
        if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
            $log_status = "logout";
        }
        echo View::createView3('datacharts.php', [
            "result1" => $result1,
            "result2" => $result2,
            "result3" => $result3,
            "result4" => $result4,
            "result5" => $result5,
            "log_status" => $log_status
        ]);
    }

    public function patientinfo()
    {
        $query  = "SELECT * FROM patientinfo";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function searchtrends()
    {
        $query  = "SELECT * FROM searchtrend";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function govpolicy()
    {
        $query  = "SELECT * FROM policy";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function chart1()
    {
        $query  = "SELECT YEAR(date),AVG(cold) as 'avgcold',AVG(flu) as 'avgflu',AVG(pneumonia) as 'avgpneumonia',AVG(coronavirus) as 'avgcovid'
                        FROM searchtrend 
                        GROUP BY YEAR(date)";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function chart2()
    {
        $query  = "SELECT MONTH(date),AVG(coronavirus) as 'avgcovid'
            FROM searchtrend 
            WHERE YEAR(date) = 2020
            GROUP BY YEAR(date),MONTH(date)";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function chart3()
    {
        $query  = "SELECT age,COUNT(*) as 'jumlah' FROM patientinfo GROUP BY age";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function chart4()
    {
        $query  = "SELECT sex,COUNT(*) as 'jumlah' FROM patientinfo GROUP BY sex";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function chart5()
    {
        $query  = "SELECT state,COUNT(*) as 'jumlah' FROM patientinfo GROUP BY state";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }
}
?>