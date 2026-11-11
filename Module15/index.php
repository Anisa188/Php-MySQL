
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

        .add, .edit, .delete {
            color: white;
            padding: 9px 13px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .add { background: #008cff; }
        .edit { background: #28a745; }
        .delete { background: #dc3545; }
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
            <th>Actions</th>
        </tr>

        <?php foreach ($products as $row) { ?>
        <tr>
            <td><?= htmlspecialchars($row['id']); ?></td>

            <td><?= htmlspecialchars($row['name']); ?></td>

           <td><?= htmlspecialchars($row['description']); ?></td>

<td><?= htmlspecialchars($row['sasia']); ?></td>

            <td>
                <a href="edit.php?id=<?= $row['id']; ?>"
                   class="edit">EDIT</a>

                <form method="POST" action="delete.php"
                      style="display:inline;"
                      onsubmit="return confirm('A je i sigurt qe don me fshi?')">

                    <input type="hidden" name="id"
                           value="<?= $row['id']; ?>">

                    <button type="submit" class="delete">
                        DELETE
                    </button>

                </form>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>
