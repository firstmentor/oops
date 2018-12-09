<?php

function __autoload($class){

	include "classes/$class.php";

}


$b = new rjit();
$a =new itm();
$c = new mpct();


echo $b->name ."<br>";
echo $a->name ."<br>";
echo $c->name ."<br>";