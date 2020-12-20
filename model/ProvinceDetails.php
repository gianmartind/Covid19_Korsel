<?php
    class ProvinceDetails{
        public $province;
        public $confirmed;
        public $recovered;
        public $deceased;
        
        public function __construct($province, $confirmed, $recovered, $deceased){
            $this->province = $province;
            $this->confirmed = $confirmed;
            $this->recovered = $recovered;
            $this->deceased = $deceased;
        }

        public function getProvince(){
            return $this->province;
        }

        public function getConfirmed(){
            return $this->confirmed;
        }

        public function getRecovered(){
            return $this->recovered;
        }

        public function getDeceased(){
            return $this->deceased;
        }
    }
?>