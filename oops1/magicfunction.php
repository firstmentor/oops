<?php

class rjit {
    
     public $name ="vikasjain";
     public $age = 34;


	public function __construct(){

	  echo  $this->name ."".$this->age;


	}

	public function hello(){ //user define 

		echo "hello world";

	}
}

$a = new rjit();
//$a->hello();