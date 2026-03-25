<?php
include "db.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

header("Location: display_students.php");
exit();
?>