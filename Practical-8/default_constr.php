<?php

class Student {
    public $name;
    public $rollNo;

  
    function __construct() {
        $this->name = "Unknown";  // Default name
        $this->rollNo = "000";    // Default roll number
    }

    
    public function display() {
        echo "<br> Student Name: " . $this->name;
        echo "<br> Student Roll No: " . $this->rollNo;
    }
}

$s1 = new Student();
$s1->display();

?>
