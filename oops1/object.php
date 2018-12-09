<?php

class student{

	private $name, $rollno , $address, $phone; //user se 4 chiz leni hai

	function getData ($sname, $srollno, $saddress, $sphone) // jo parameter mai pass hoga bo is variable mai jana chahiye
	{

		$this->name =$sname;
		$this->rollno =$srollno;
		$this->address=$saddress;
		$this->phone =$sphone;

	}

	function showdata(){

		echo "name : " .$this->name;
	}



}

$vikas = new student ();
$vikas->getData ("vikas" ,"34554545" ,"jainhostwl", "3456543");
$vikas->showdata();


