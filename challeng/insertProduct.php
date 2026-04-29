<?php
require "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO Products (name, price, description) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["description"]]);
    header("Location: index.php");
}
?>