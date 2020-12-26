<?php

class policy{
	protected $policy_id;
	protected $country;
	protected $type;
	protected $gov_policy;
    protected $detail;
    protected $start_date;
    protected $end_date;

	public function __construct($policy_id,$country,$type,$gov_policy,$detail,$start_date,$end_date){
		$this->policy_id = $policy_id;
		$this->country = $country;
		$this->type = $type;
		$this->gov_policy = $gov_policy;
        $this->detail = $detail;
        $this->start_date= $start_date;
        $this->end_date= $end_date;
	}

	public function getpolicyid(){
		return $this->policy_id;
	}

	public function getcountry(){
		return $this->country;
	}

	public function gettype(){
		return $this->type;
	}

	public function getgovpolicy(){
		return $this->gov_policy;
	}

	public function getdetail(){
		return $this->detail;
    }
    
    
	public function getstartdate(){
		return $this->start_date;
    }
    
    
	public function getenddate(){
		return $this->end_date;
	}
}


?>