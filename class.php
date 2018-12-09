<?php

class rjit {

	public $name ="vikas";
	public $age =12;


	public function hello(){

		echo "hello rjit";
	}
}

$a = new rjit();
$b = new rjit();
$b->hello();
echo $a->name;