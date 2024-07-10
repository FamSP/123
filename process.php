<?php
include "./model/Address.php";
include "./model/Person.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $original_name = $_POST['original_name'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];

    $address = new Address($street, $city, $state, $postalCode);
    $person = new Person($name, $age, $address);

    // Assuming you have a way to update the person in your data store
    // updatePerson($original_name, $person);

    echo "Person updated: " . $person;
}
?>
