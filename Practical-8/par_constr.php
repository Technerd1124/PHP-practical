<?php
  
  class student {
     public $name;
    public  $rollNo;
    function __construct($n,$r) {
   $this->name=$n;
   $this->rollNo=$r;
   }

  public function display(){ 
   echo" <br> Student Name : ".$this->name;
   echo"<br> Student Roll No :".$this->rollNo;
 }

 }
 $s1=new student("dhanshri","18");
  $s1->display();
?>