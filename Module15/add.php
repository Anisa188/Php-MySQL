
<?php
include "config.php";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sasia = $_POST['sasia'];

    $stmt = $conn->prepare(
        "INSERT INTO products (name, description, sasia)
         VALUES (?, ?, ?)"
    );

    $stmt->execute([$name, $description, $sasia]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 40px;
        }

        .form {
            background: white;
            padding: 25px;
            width: 350px;
            margin: auto;
            border-radius: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            background: #008cff;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="form">
    <h2>Add Product</h2>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Description</label>
        <textarea name="description" required></textarea>

        <label>Sasia</label>
        <input type="number" name="sasia" required>

        <button type="submit" name="save">Save Product</button>
    </form>

    <p><a href="index.php">Back to Dashboard</a></p>
</div>

</body>
</html>
