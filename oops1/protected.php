<?php

class rjit{

	protected $name = "vikas";
	public $age =  23;


	function hello(){

		echo "hello vikas";
	}

}
class itm extends rjit{


	function helloname(){


		return $this->name;
	}


}



$a = new rjit();

//echo $a->name;

$b = new itm();
echo $b->helloname();