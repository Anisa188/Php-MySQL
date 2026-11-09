
<?php
include "config.php";

$stmt = $conn->query("SELECT COUNT(*) FROM products");
$total = $stmt->fetchColumn();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            margin: 0;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #252b35;
            position: fixed;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px 10px;
            text-decoration: none;
        }

        .content {
            margin-left: 220px;
            padding: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            width: 250px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h2 style="color:white;">Hello!</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Products</a>
    <a href="add.php">Add Product</a>
</div>

<div class="content">
    <h1>Dashboard</h1>

    <div class="card">
        <h3>Total Products</h3>
        <h1><?php echo $total; ?></h1>
    </div>
</div>

</body>
</html>
