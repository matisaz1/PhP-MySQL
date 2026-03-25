<?php
include "db.php";

$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Student List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Classification</th>
        <th>Action</th>
    </tr>
    <?php foreach ($students as $row): ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td>
            <?php
            // If/Else Logic
            if ($row["age"] >= 18) {
                echo "Adult";
            } else {
                echo "Minor";
            }

            // Switch Logic
            switch (true) {
                case ($row["age"] < 13):
                    echo " (Child)";
                    break;
                case ($row["age"] < 20):
                    echo " (Teen)";
                    break;
                default:
                    echo " (Adult)";
            }
            ?>
        </td>
        <td>
            <a href="delete_students.php?id=<?php echo $row["id"]; ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="index.php">Add Another Student</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        background-color: #f4f4f4;
    }
    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        display: inline-block;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    input {
        display: block;
        margin-bottom: 10px;
        padding: 8px;
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: white;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #007bff;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .delete-btn {
        color: #dc3545;
        text-decoration: none;
        font-weight: bold;
    }
</style>
    <title>Student List</title>
</head>
<body>
    
</body>
</html>