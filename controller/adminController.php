<?php 
    require_once "mysqlDBService.php";
    require_once "viewService.php";
    require_once "../model/IndexData.php";
    require_once "../model/ProvinceDetails.php";


    class adminController{  
        protected $db;
    
        public function __construct(){
        $this->db = new MySQLDB("localhost","root","","covid19korsel");
        }

        //check login Admin
        public function login(){
            $name="";
            $pw="";
            $query= "SELECT * from admin";
           $check=false;
           $atas=false;
           $bawah=true;
            if(isset($_POST['username'])&&isset($_POST['password'])){
            $name=$_POST['username'];
            $pw=$_POST['password'];
            if(isset($name)&& $name!=""&&isset($pw)&& $pw!=""){
                $name=$this->db->escapeString($name);
                $pw=$this->db->escapeString($pw);
                $query .= " WHERE username LIKE '$name' AND password LIKE '$pw'";    
            }
            $result = $this->db->ngitungbaris($query);
            if($result>0&& $name!=""&& $pw!=""){
            $check=true;
            $this->db->betulgak($check,'admin');    
             }
            }
        }

        //view admin
        public function view_admin(){
             return View::createView4('admin');
          }

        //log out

        public function logout(){
            return View::createView4('admin/login');
        }

        //add patient

        public function add_patient(){
            $sex = $_POST['gender'];
            $age = $_POST['age']; 
            $country = $_POST['country'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $infection=$_POST['case'];
            $date=$_POST['date'];
            $state=$_POST['state'];
            if (isset($sex) &&isset($age) && isset($country)  &&isset($province) && isset($city) && isset($infection) && isset($date) && isset($state) 
                && $sex != ""  && $age != ""&& $country != ""  && $province != "" && $city!="" && $infection!=""&& $date!="" && $state!="") {
                $sex = $this->db->escapeString($sex);
                $age = $this->db->escapeString($age);
                $country = $this->db->escapeString($country);
                $province = $this->db->escapeString($province);
                $city = $this->db->escapeString($city);
                $infection = $this->db->escapeString($infection);
                $date = $this->db->escapeString($date);
                $state = $this->db->escapeString($state);
                $query = "INSERT INTO patientinfo (sex,age,country,province,city,infection_case,confirmed_date,state) VALUES ('$sex','$age','$country','$province','$city','$infection','$date','$state')";
                $this->db->executeNonSelectQuery($query);
                //kemananya edit lagi
                header('Location: /admin');    
         }
        
        }

        //add search trend
       public function add_searchtrend(){
        $date = $_POST['date'];
        $cold = $_POST['cold']; 
        $flu = $_POST['flue'];
        $pneumonia = $_POST['pneumonia'];
        $coronavirus = $_POST['coronavirus'];
        if (isset($date) &&isset($cold) && isset($flu)  &&isset($pneumonia) &&isset($coronavirus) && 
        $date != ""  && $cold != ""&& $flu != ""  && $pneumonia != "" && $coronavirus != "") {
            $date= $this->db->escapeString($date);
            $cold = $this->db->escapeString($cold);
            $flu = $this->db->escapeString($flu);
            $pneumonia = $this->db->escapeString($pneumonia);
            $coronavirus = $this->db->escapeString($coronavirus);
              $query = "INSERT INTO searchtrend (date,cold,flu,pneumonia,coronavirus) VALUES ('$date','$cold','$flu','$pneumonia','$coronavirus')";
            $this->db->executeNonSelectQuery($query);
            //kemananya edit lagi
            header('Location: /admin');
        }
       }

        //add policy

       public function add_policy(){
        $country = $_POST['country'];
        $type = $_POST['type']; 
        $gov = $_POST['govPolicy'];
        $det = $_POST['detail'];
        $sd = $_POST['startDate'];
        $ed=$_POST['endDate'];
        if (isset($country) &&isset($type) && isset($gov)  &&isset($det) &&isset($sd) &&isset($ed) && $country != ""  && $type != ""&& $gov != ""  && $det != ""&& $sd != "" && $ed != "") {
            $country = $this->db->escapeString($country);
            $type = $this->db->escapeString($type);
            $gov = $this->db->escapeString($gov);
            $det = $this->db->escapeString($det);
            $sd = $this->db->escapeString($ed);
            $query = "INSERT INTO policy (country,type,gov_policy,detail,start_date,end_date) VALUES ('$country','$type','$gov','$sd','$ed')";
            $this->db->executeNonSelectQuery($query);
             // kemananya edit lagi
            header('Location: /admin');
     }
}

    }



?>