<?php
class Animal {
    public $name;
    protected $age;
    private $type;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        return "Animal Sound";
    }
}

// Creating an instance
$dog = new Animal("Buddy");

// 1. Get Class Name
echo "Class Name: " . get_class($dog) . "<br>";

// 2. Check if Class Exists
echo class_exists('Animal') ? "Class Exists<br>" : "Class Not Found<br>";

// 3. Get Parent Class (None in this case)
echo "Parent Class: " . (get_parent_class($dog) ?: "None") . "<br>";

// 4. Check if Method Exists
echo method_exists($dog, 'speak') ? "Method Exists<br>" : "Method Not Found<br>";

// 5. Get Class Methods
print_r(get_class_methods('Animal'));
echo "<br>";

// 6. Get Class Variables
print_r(get_class_vars('Animal'));
echo "<br>";

// 7. Get Object Variables
print_r(get_object_vars($dog));
?>
