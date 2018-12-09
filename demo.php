<?php

class rjit{

	protected $name ="vikas";
	protected $age = 34;


	public function hello(){

		echo "hello vikas";
	}

}
class mpct extends rjit{

	public function vikas(){

		return $this->name . $this->age . $this->hello();
	}


}

$a = new mpct();
echo $a->vikas();