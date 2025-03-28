<?php
class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

// Creating an object
$car = new Car("Toyota", "Camry");

// Serialize the object
$serializedCar = serialize($car);
echo "Serialized Object: " . $serializedCar . "<br>";

// Unserialize the object
$unserializedCar = unserialize($serializedCar);
echo "Unserialized Object: ";
print_r($unserializedCar);
?>
