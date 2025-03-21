<?php 


// Practical 8 - Q2.Mulitple Inheritance 


   class  A {
   
    function  hello_a(){
       echo" Hello A class <br>";   
   }
   
} 
  
 trait b {
    function  hello_b(){
       echo" Hello B class <br>";   
   }
}

 class C extends A { 
  use b;
 
     function  hello_C(){
       echo" Hello C class";   
   }
}


 $obj = new C();
 $obj->hello_a();
 $obj->hello_b();
$obj->hello_C();
?>
