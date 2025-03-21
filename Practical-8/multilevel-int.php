<?php

// Practical 8 Q1; Multilevel Inheritance 
 
 class base {
 
public   function base_fun(){
    echo" Hello from Base Class <br>";
 }

}

class child1 extends base{

 public  function c1_fun(){
   	 echo" Hello From 1st Child Class <br>";
     }

}

 class child2 extends child1{

 function c2_fun(){
    echo" Hello From 2nd Child Class";
 }
}

  $b1 = new child2(); 
   $b1->base_fun();
   $b1->c1_fun();
   $b1->c2_fun();
?>
