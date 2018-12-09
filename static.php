<?php
class rjit{

   public static $name= "vikasjain";
   public static $age =34;

   public static function hello(){

   	return self :: $age;

   }
 }
 class mpct extends rjit{

 	public function bye(){

 		return parent :: $name;
 	}
 }
 
echo mpct::bye();  





