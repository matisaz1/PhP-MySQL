<?php

include_once 'config.php';

if(isset(&_POAST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, lastname, email) VALUES (:name, :lastname, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Data saved succesfully!";
    } else {
        echo "Error saving data.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Add user</title>
</head>
<body>

<a href="index.php">Dashboard</a>

<form action="add.php" method="Post">
    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="text" name="lastname" placeholder="Enter your last name"><br>
    <input type="text" name="email" placeholder="Enter your email"><br>
    <button type="submit" name="submit" placeholder="
</body>
</html>