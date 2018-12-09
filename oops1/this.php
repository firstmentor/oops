<?php

  class rjit {

  	public $name ="vikas jain";
  	public $age = 45;
  	public $address ="thatipur";


  	public function hello(){

  		echo $this->name . " hh " .$this->age;
  	}

  }

  $a = new rjit();
  $a->hello();