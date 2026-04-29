<?php
require "config.php";
$stmt = $pdo->query("SELECT * FROM Products");
$products = $stmt->fetchAll();
?>

<h1>Product Dashboard</h1>
<a href="addProduct.php">Add New Product</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?php echo $p["id"]; ?></td>
        <td><?php echo $p["name"]; ?></td>
        <td><?php echo $p["price"]; ?></td>
        <td><?php echo $p["description"]; ?></td>
        <td>
            <a href="editProduct.php?id=<?php echo $p["id"]; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $p["id"]; ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>