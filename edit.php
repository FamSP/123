<?php
include "./model/Address.php";
include "./model/Person.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $street = $_GET['street'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $postalCode = $_GET['postalCode'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Person</title>
</head>
<body>
    <form action="process_edit.php" method="post">
        <input type="hidden" name="original_name" value="<?php echo $name; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>" required><br>

        <label for="street">Street:</label>
        <input type="text" id="street" name="street" value="<?php echo $street; ?>" required><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo $city; ?>" required><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" value="<?php echo $state; ?>" required><br>

        <label for="postalCode">Postal Code:</label>
        <input type="text" id="postalCode" name="postalCode" value="<?php echo $postalCode; ?>" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
