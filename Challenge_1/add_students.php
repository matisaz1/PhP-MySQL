<?php
include "db.php";
include "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_data = [
        "name" => validateInput($_POST["name"]),
        "email" => validateInput($_POST["email"]),
        "age" => (int)$_POST["age"]
    ];

    $sql = "INSERT INTO students (name, email, age) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $student_data["name"], 
        $student_data["email"], 
        $student_data["age"]
    ]);

    $file = fopen("students.txt", "a");
    $txt = $student_data["name"] . ", " . $student_data["email"] . ", " . $student_data["age"] . "\n";
    fwrite($file, $txt);
    fclose($file);

    header("Location: display_students.php");
    exit();
}
?>