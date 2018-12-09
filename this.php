<?php

class rjit{

	public $name ="vikas";
	public $age =34;
	public $email ="jainvikas887@gmail.com";

	public function user(){
		echo $this->name .$this->email . $this->age;
	}
}
$hello = new rjit();

$hello->user();