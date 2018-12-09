<?php
class Additionclass{

	function Add($num1, $num2)
	{
		echo ($num1+$num2);
	}
	function Add($num1, $num2, $num3) // same argument not work php overloading
	{
		echo ($num1+$num2+$num3);
	}


}
$obj = new Additionclass();
$obj->Add(5,6);
//$obj->Add(5,6,5);