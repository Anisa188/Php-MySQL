

<?php
include "config.php";

if (isset($_POST['save'])) {
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $sasia = (int) $_POST['sasia'];

    $stmt = $conn->prepare(
        "INSERT INTO products (name, description, sasia)
         VALUES (:name, :description, :sasia)"
    );

    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':sasia' => $sasia
    ]);

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

        .form {
            background: white;
            padding: 25px;
            width: 350px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            box-sizing: border-box;
        }

        button {
            background: #008cff;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            color: #252b35;
            text-decoration: none;
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

    <h1>Add Product</h1>

    <div class="form">

        <form method="POST">

            <label>Name</label>

            <input
                type="text"
                name="name"
                required
            >

            <label>Description</label>

            <textarea
                name="description"
                required
            ></textarea>

            <label>Sasia</label>

            <input
                type="number"
                name="sasia"
                min="0"
                required
            >

            <button type="submit" name="save">
                Save Product
            </button>

        </form>

        <a href="index.php" class="back">
            Back to Dashboard
        </a>

    </div>

</div>

</body>
</html>
