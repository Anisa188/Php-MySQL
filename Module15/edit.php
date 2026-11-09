
<?php
include "config.php";

if (!isset($_GET['id'])) {
    die("ID not found");
}

$id = (int) $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("Product not found");
}

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $description = $_POST['product_description'];
    $quantity = $_POST['quantity'];

    $stmt = $conn->prepare(
        "UPDATE products
         SET name = ?, product_description = ?, quantity = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $name,
        $description,
        $quantity,
        $id
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <h3>Hello,</h3>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Product Dashboard</a>
    <a href="add.php">Add Product</a>
</div>

<div class="content">

    <h2>Update Product</h2>

    <form method="POST">

        <label>Name</label>
        <input type="text" name="name"
        value="<?php echo htmlspecialchars($product['name']); ?>" required>

        <label>Product Description</label>
        <input type="text" name="product_description"
        value="<?php echo htmlspecialchars($product['product_description']); ?>" required>

        <label>Sasia</label>
        <input type="number" name="quantity"
        value="<?php echo $product['quantity']; ?>" min="0" required>

        <button type="submit" name="update">Update</button>

    </form>

</div>

</body>
</html>