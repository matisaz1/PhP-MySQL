<?php
$conn = new mysqli("127.0.0.1", "root", "", "products_db", 3307);

if ($conn->connect_error) {
    die("ERROR: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?> 