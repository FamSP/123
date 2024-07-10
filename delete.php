<?php
include "./model/Address.php";
include "./model/Person.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $_POST['name'];

    // Assuming you have a way to delete the person from your data store
    // deletePerson($name);

    echo "Person deleted: " . $name;
}
?>
