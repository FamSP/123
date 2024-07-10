<?php
include "./model/Address.php";
include "./model/Person.php";

// Create an instance of Address
$address = new Address('123 Main St', 'Springfield', 'IL', '62701');

// Create an instance of Person using the address created
$person = new Person('John Doe', 30, $address);

echo $person;

echo '<br><a href="edit.php?name=' . $person->name . '&age=' . $person->age . '&street=' . $address->street . '&city=' . $address->city . '&state=' . $address->state . '&postalCode=' . $address->postalCode . '">Edit</a>';
echo ' | <form action="delete.php" method="post" style="display:inline;">
        <input type="hidden" name="name" value="' . $person->name . '">
        <input type="submit" value="Delete">
      </form>';
?>
