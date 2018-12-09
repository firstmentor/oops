<?php

class rjit{

	public static $name ="vikasjain";
	public static $name1 ="mohit";
	public $age = 34;


	public static function  hello (){

		return self :: $name1; 
	}
}
class itm extends rjit{

	 public static function bye(){

	 	return parent ::$name;


	 }
}

echo itm :: bye();
