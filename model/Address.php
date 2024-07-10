<?php

class Address {
    public $street;
    public $city;
    public $state;
    public $postalCode;

    public function __construct($street, $city, $state, $postalCode) {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
    }

    public function __toString() {
        return $this->street . ', ' . $this->city . ', ' . $this->state . ', ' . $this->postalCode;
    }
}
?>
