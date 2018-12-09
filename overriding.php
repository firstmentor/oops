<?php
class car
{
	public  function startcar(){

		echo "the car is started.";
	}
}
class sportscar extends car{

	public  function startcar(){

		echo "the sportcar is started with self start.";
	}


}

$spcar = new sportscar();
$spcar->startcar();