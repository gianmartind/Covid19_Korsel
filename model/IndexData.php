<?php
    class IndexData{
        public $confirmed;
        public $recovered;
        public $deceased;
        public $country;

        public function __construct($confirmed, $recovered, $deceased, $country){
            $this->confirmed = $confirmed;
            $this->recovered = $recovered;
            $this->deceased = $deceased;
            $this->country = $country;
        }

        public function getConfirmed(){
            return $this->confirmed;
        }

        public function getRecovered(){
            return $this->confirmed;
        }

        public function getDeceased(){
            return $this->deceased;
        }

        public function getCountry(){
            return $this->country;
        }
    }
?>