<?php

 class countries{

 	
 	
 	public $ind = "india";
 	public $jp ="japan";
 	public $us = "United states";
 }

 class players extends countries{

 	protected $name1 ="vikas";
 	public $name2 = "raj";
 	public $name3 ="ram";

 	}

  class eat extends players {

  	public $tea1 ="tea";
 	

       public function getplayer(){

 		return $this->name1 . " is tatti " .$this->ind . " form " .$this->tea1;
 	}	






  }



$a = new eat();
echo $a->getplayer();



