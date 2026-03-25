<?php
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function connectDB($host, $db, $user, $pass) {
    try {
        return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch (PDOException $e) {
        return null;
    }
}
?>