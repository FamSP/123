<?php

class Person {
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function __toString() {
        return 'Name: ' . $this->name . ', Age: ' . $this->age . ', Address: ' . $this->address;
    }
}
?>
