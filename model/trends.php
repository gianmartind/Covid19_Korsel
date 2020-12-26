<?php

class trends{
	protected $date;
	protected $cold;
	protected $flu;
	protected $pneumonia;
	protected $coronavirus;

	public function __construct($date,$cold,$flu,$pneumonia,$coronavirus){
		$this->date = $date;
		$this->cold = $cold;
		$this->flu = $flu;
		$this->pneumoniaa = $pneumonia;
		$this->coronavirus = $coronavirus;
	}

	public function getdate(){
		return $this->date;
	}

	public function getcold(){
		return $this->cold;
	}

	public function getflu(){
		return $this->flu;
	}

	public function getpneumonia(){
		return $this->pneumonia;
	}

	public function getcoronavirus(){
		return $this->coronavirus;
	}
}


?>