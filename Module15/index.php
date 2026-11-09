
<?php
include "config.php";

$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

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

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #252b35;
            color: white;
        }

        .add {
            background: #008cff;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            border-radius: 5px;
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

    <h1>Dashboard</h1>

    <a href="add.php" class="add">Add Product</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Sasia</th>
        </tr>

        <?php foreach ($products as $row) { ?>
        <tr>
            <td><?= $row['Id']; ?></td>
            <td><?= htmlspecialchars($row['name']); ?></td>
            <td><?= htmlspecialchars($row['description']); ?></td>
            <td><?= $row['sasia']; ?></td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>
