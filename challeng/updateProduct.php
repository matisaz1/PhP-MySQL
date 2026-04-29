<?php
require "config.php";
$sql = "UPDATE Products SET name = ?, price = ?, description = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST["name"], $_POST["price"], $_POST["description"], $_POST["id"]]);
header("Location: index.php");
?>