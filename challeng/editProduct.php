<?php
require "config.php";
$stmt = $pdo->prepare("SELECT * FROM Products WHERE id = ?");
$stmt->execute([$_GET["id"]]);
$product = $stmt->fetch();
?>

<form action="updateProduct.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
    <input type="text" name="name" value="<?php echo $product["name"]; ?>">
    <input type="number" step="0.01" name="price" value="<?php echo $product["price"]; ?>">
    <textarea name="description"><?php echo $product["description"]; ?></textarea>
    <button type="submit">Update</button>
</form>