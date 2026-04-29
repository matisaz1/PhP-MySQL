<h2>Add Product</h2>

<form action="insertProduct.php" method="POST">
    Name: <input type="text" name="name"><br><br>
    Price: <input type="number" step="0.01" name="price"><br><br>
    Description: <textarea name="description"></textarea><br><br>
    <button type="submit">Save</button>
</form>