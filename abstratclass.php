<?php
abstract class speck{

	abstract public function sayHello();

	public function hello2()
	{
		echo "hello 2 function <br>";
	}
}
 class childone extends speak
 {
 	public function satHello(){

 		echo "Hello all <br>";
 	}
 }

 $ch = new childone();
 $ch->hello2();
 $ch->sayHello();
