<?php
class student{

 private $sanme,$rollno; //direct use nahi hote

 function getData ($name, $rollno)
 {

   $this->sname =$name;
   $this->rollno =$rollno;

 }
 function showData(){

 	echo "Name :". $this->sname ." Rollno :- ". $this->rollno;
 }

}
$student1 = new student ();
$student1->getData("vikas", 1);
$student1->showData();

$student2 = new student ();
$student2->getData("rahul", 2);
$student2->showData();


$student3 = new student ();
$student3->getData("mohit", 3);
$student3->showData();