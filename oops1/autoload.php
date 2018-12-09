<?php

function __autoload($class){

	include "autoload/$class.php";

}

$vikas = new vikas();
echo $vikas->name ."<br/>";

$mohit = new mohit();
echo $mohit->name ."<br/>";


$rahul = new rahul();
echo $rahul->name ."<br/>";