<?php
    class IndexData{
        public $confirmed;
        public $recovered;
        public $deceased;
        public $province;

        public function __construct($confirmed, $recovered, $deceased, $province){
            $this->confirmed = $confirmed;
            $this->recovered = $recovered;
            $this->deceased = $deceased;
            $this->province = $province;
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

        public function getProvince(){
            return $this->province;
        }
    }
?>