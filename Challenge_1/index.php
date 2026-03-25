<!DOCTYPE html>
<html>
<head>
    <title>Student Project</title>
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
</head>
<body>
    <h2>Add New Student</h2>
    <form action="add_students.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="email" name="email" placeholder="Email Address" required><br><br>
        <input type="number" name="age" placeholder="Age" required><br><br>
        <button type="submit">Submit Student</button>
    </form>
    <br>
    <a href="display_students.php">View All Students</a>
</body>
</html>