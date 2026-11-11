
<?php
include "config.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID not found!");
}

$id = (int) $_GET['id'];

// Get product
$stmt = $conn->prepare("SELECT * FROM products WHERE Id = ?");
$stmt->execute([$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("Product not found!");
}

// Update product
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $sasia = (int) $_POST['sasia'];

    $stmt = $conn->prepare(
        "UPDATE products
         SET name = ?, description = ?, sasia = ?
         WHERE Id = ?"
    );

    $stmt->execute([
        $name,
        $description,
        $sasia,
        $id
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #252b35;
            color: white;
            position: fixed;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 10px;
        }

        .sidebar a:hover {
            background: #414b5a;
        }

        .content {
            margin-left: 220px;
            padding: 30px;
        }

        form {
            background: white;
            padding: 25px;
            width: 400px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 7px;
            box-sizing: border-box;
        }

        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .back {
            background: #555;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h2>Hello!</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Products</a>
    <a href="add.php">Add Product</a>
</div>

<div class="content">

    <h1>Edit Product</h1>

    <form method="POST">

        <label>Name</label>

        <input type="text"
               name="name"
               value="<?php echo htmlspecialchars($product['name']); ?>"
               required>

        <label>Description</label>

        <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>

        <label>Sasia</label>

        <input type="number"
               name="sasia"
               value="<?php echo htmlspecialchars((string)$product['sasia']); ?>"
               min="0"
               required>

        <button type="submit">
            Update Product
        </button>

        <a href="index.php" class="back">Back</a>

    </form>

</div>

</body>
</html>
