<?php

class Dish
{
	public function sabji()
	{
		echo "sabji form dish";
	}
	public function roti()
	{
		echo "roti form dish";
	}	
	
}

trait Sweet
{
 public function Sweet(){

 	echo "sweet from traits";
 }

}
trait ButterMilk
{
 public function bm(){

 	echo "Bm from traits";
 }

}

class Dish2 extends Dish
{
    use Sweet , ButterMilk;

}


$d2 = new Dish2();
$d2->Sweet() ."<br/>";
$d2->bm();




?>