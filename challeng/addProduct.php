<form action="insertProduct.php" method="POST">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save Product</button>
</form>