<?php

class rjit{

	public $name ="vikas";
	public $age = 30;



	public function hello(){

		echo "hello vikas";
	}


}

$a = new rjit();

echo $a->name ."is ". $a->age ."years";
$a->hello();