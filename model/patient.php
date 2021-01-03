<?php

class patient{
	protected $patient_id;
	protected $sex;
	protected $age;
	protected $country;
	protected $province;
	protected $city;
	protected $infection_case;	
    protected $confirmed_date;
    protected $state;

	public function __construct($patient_id,$sex,$age,$country,$province,$city,$infection_case,$confirmed_date,$state){
		$this->patient_id = $patient_id;
		$this->sex = $sex;
		$this->age = $age;
		$this->country = $country;
		$this->province = $province;
		$this->city = $city;
        $this->infection_case = $infection_case;
        $this->confirmed_date=$confirmed_date;
		$this->state = $state;
	}

	public function getid(){
		return $this->patient_id;
	}

	public function getsex(){
		return $this->sex;
	}

	public function getage(){
		return $this->age;
	}

	public function getcountry(){
		return $this->country;
	}

	public function getprovince(){
		return $this->province;
	}
	public function getcity(){
		return $this->city;
	}
	public function getinfection_case(){
		return $this->infection_case;
	}
	public function getconfirmdate(){
		return $this->confirmed_date;
    }
    public function getstate(){
		return $this->state;
	}
}


?>