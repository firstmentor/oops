<?php

// public
// protected
// private

class rjit {

	protected $name ="vikas";
	public $age =12;


	public function hello(){

		echo "hello rjit";
	}
}
class mpct extends rjit{

	public function fullname(){

		return $this->name;
	}
}
$a = new mpct();
echo $a->fullname();
