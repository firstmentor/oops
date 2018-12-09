<?php
class car {

	public function Startcar(){

		echo "car started from parent class <br>";
    }

    public function InvoleParentStart()
    {
    	self:: Startcar();
    }
}
class SportsCar extends car{

	public function Startcar(){

		echo "car started from child class <br>";
    }

    public function InvoleParent()
    {
    	parent:: InvoleParentStart();
    }
}

$spcar = new sportscar();
$spcar->Startcar();
$spcar->InvoleParent();