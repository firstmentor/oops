<?php

class countries{


    public $ind = "India";
	public $pk = "pakistan";
	public $af = "Afghanistan";
	public $us = "United States";
}

class players extends countries{
    public $name1 ="Mahendra Singh Dhoni";
	public $name2 ="Shahid Afridi";
	public $name3 ="Muhammad Nadi";


	public function getplyer(){

		return $this->name1. "is from  " .$this->ind;
	}
}

$players = new players();

echo $players->getplyer();