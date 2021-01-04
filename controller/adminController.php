<?php
require_once "mysqlDBService.php";
require_once "viewService.php";
require_once "model/patient.php";
require_once "model/policy.php";
require_once "model/trends.php";


class adminController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "testcsv");
    }

    public function view_login()
    {
        session_start();
        if (isset($_SESSION['admin']) && $_SESSION != "") {
            header('Location: /Covid19_Korsel/admin');
        } else {
            echo View::createView3('login.php', []);
        }
    }

    //check login Admin
    public function login()
    {
        $name = "";
        $pw = "";
        $query = "SELECT * from admin";
        $check = false;
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $name = $_POST['username'];
            $pw = $_POST['password'];
            if ($name != "" && $pw != "") {
                $query .= " WHERE username LIKE '$name' AND password LIKE '$pw'";
            }
            $result = $this->db->ngitungbaris($query);
            if ($result > 0) {
                $check = true;
                session_start();
                $_SESSION['admin'] = $name;
                $this->db->betulgak($check, '/Covid19_Korsel/admin');
            } else {
                header('Location: /Covid19_Korsel/admin/login ');
            }
        } else {
            header('Location: /Covid19_Korsel/admin/login ');
        }
    }

    //nampilin patient
    public function getAllPatient()
    {
        $query = "SELECT patient_id,sex,age,patientinfo.country as s1,province,city,infection_case,confirmed_date,state from patientinfo  ";
        $query_result = $this->db->executeSelectQuery($query);

        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new patient($value['patient_id'], $value['sex'], $value['age'], $value['s1'], $value['province'], $value['city'], $value['infection_case'], $value['confirmed_date'], $value['state']);
        }
        return $result;
    }

    //nampilin trends
    public function getAllTrend()
    {
        $query = "SELECT date,cold,flu,pneumonia,coronavirus from searchtrend ";
        $query_result = $this->db->executeSelectQuery($query);

        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new trends($value['date'], $value['cold'], $value['flu'], $value['pneumonia'], $value['coronavirus']);
        }
        return $result;
    }

    //nampilin policy

    public function getAllPolicy()
    {
        $query = "SELECT policy_id,country,type,gov_policy,detail,start_date,end_date from  policy  ";
        $query_result = $this->db->executeSelectQuery($query);

        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new policy($value['policy_id'], $value['country'], $value['type'], $value['gov_policy'], $value['detail'], $value['start_date'], $value['end_date']);
        }
        return $result;
    }

    // view_admin
    public function view_admin()
    {
        session_start();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $result = $this->getAllPatient();
            $result2 = $this->getAllTrend();
            $result3 = $this->getAllPolicy();
            echo View::createView3(
                'admin.php',
                [
                    "result" => $result,
                    "result2" => $result2,
                    "result3" => $result3
                ]
            );
        } else {
            header('Location: /Covid19_Korsel/admin/login ');
        }
    }



    //log out

    public function logout()
    {
        session_start();
        unset($_SESSION['admin']);
        header('Location: /Covid19_Korsel/admin/login');
    }

    //add patient

    public function add_patient()
    {
        $sex = $_POST['gender'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $infection = $_POST['case'];
        $date = $_POST['date'];
        $state = $_POST['state'];
        if (
            isset($sex) && isset($age) && isset($country)  && isset($province) && isset($city) && isset($infection) && isset($date) && isset($state)
            && $sex != ""  && $age != "" && $country != ""  && $province != "" && $city != "" && $infection != "" && $date != "" && $state != ""
        ) {
            $sex = $this->db->escapeString($sex);
            $age = $this->db->escapeString($age);
            $country = $this->db->escapeString($country);
            $province = $this->db->escapeString($province);
            $city = $this->db->escapeString($city);
            $infection = $this->db->escapeString($infection);
            $date = $this->db->escapeString($date);
            $state = $this->db->escapeString($state);
            $id = $this->getid() + 1;
            $query = "INSERT INTO patientinfo (patient_id,sex,age,country,province,city,infection_case,confirmed_date,state) VALUES ('$id','$sex','$age','$country','$province','$city','$infection','$date','$state')";
            $this->db->executeNonSelectQuery($query);
            //kemananya edit lagi
            header('Location: /Covid19_Korsel/admin');
        }
    }
    //dapetin id terakhir dari patient
    public function getid()
    {
        $query = "SELECT * from patientinfo";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new patient($value['patient_id'], $value['sex'], $value['age'], $value['country'], $value['province'], $value['city'], $value['infection_case'], $value['confirmed_date'], $value['state']);
        }
        $tes = 0;
        foreach ($result as $key => $row) {
            $tes = $row->getid();
        }
        return $tes;
    }

    //dapetin id terakhir dari policy
    public function getidp()
    {
        $query = "SELECT * from policy";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new policy($value['policy_id'], $value['country'], $value['type'], $value['gov_policy'], $value['detail'], $value['start_date'], $value['end_date']);
        }
        $tes = 0;
        foreach ($result as $key => $row) {
            $tes = $row->getpolicyid();
        }
        return $tes;
    }

    //add search trend
    public function add_searchtrend()
    {
        $date = $_POST['date'];
        $cold = $_POST['cold'];
        $flu = $_POST['flue'];
        $pneumonia = $_POST['pneumonia'];
        $coronavirus = $_POST['coronavirus'];
        if (
            isset($date) && isset($cold) && isset($flu)  && isset($pneumonia) && isset($coronavirus) &&
            $date != ""  && $cold != "" && $flu != ""  && $pneumonia != "" && $coronavirus != ""
        ) {
            $date = $this->db->escapeString($date);
            $cold = $this->db->escapeString($cold);
            $flu = $this->db->escapeString($flu);
            $pneumonia = $this->db->escapeString($pneumonia);
            $coronavirus = $this->db->escapeString($coronavirus);
            $query = "INSERT INTO searchtrend (date,cold,flu,pneumonia,coronavirus) VALUES ('$date','$cold','$flu','$pneumonia','$coronavirus')";
            $this->db->executeNonSelectQuery($query);
            //kemananya edit lagi
            header('Location: /Covid19_Korsel/admin');
        }
    }

    //add policy

    public function add_policy()
    {
        $country = $_POST['country'];
        $type = $_POST['type'];
        $gov = $_POST['govPolicy'];
        $det = $_POST['detail'];
        $sd = $_POST['startDate'];
        $ed = $_POST['endDate'];
        if (isset($country) && isset($type) && isset($gov)  && isset($det) && isset($sd) && isset($ed) && $country != ""  && $type != "" && $gov != ""  && $det != "" && $sd != "" && $ed != "") {
            $country = $this->db->escapeString($country);
            $type = $this->db->escapeString($type);
            $gov = $this->db->escapeString($gov);
            $det = $this->db->escapeString($det);
            $sd = $this->db->escapeString($ed);
            $id = $this->getidp() + 1;
            $query = "INSERT INTO policy (policy_id,country,type,gov_policy,detail,start_date,end_date) VALUES ('$id','$country','$type','$gov','$det','$sd','$ed')";
            $this->db->executeNonSelectQuery($query);
            // kemananya edit lagi
            header('Location: /Covid19_Korsel/admin');
        }
    }
}
