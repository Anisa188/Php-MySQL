
<?php
include 'config.php';

// Delete user
if (isset($_POST['delete'])) {
    $id = (int) $_POST['id'];

    $stmt = mysqli_prepare($conn, "DELETE FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header("Location: dashboard.php?deleted=1");
    exit;
}

// Total users
$totalQuery = mysqli_query($conn,
    "SELECT COUNT(*) AS total FROM users");
$total = mysqli_fetch_assoc($totalQuery)['total'];

// New users in last 7 days
$newQuery = mysqli_query($conn,
    "SELECT COUNT(*) AS total FROM users
     WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
$new = mysqli_fetch_assoc($newQuery)['total'];

// All users
$users = mysqli_query($conn,
    "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: #212529;
        }

        .sidebar h4 {
            color: white;
            padding: 25px 10px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: #adb5bd;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #667eea;
            color: white;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .navbar {
            background: white;
        }

        .stat-card {
            padding: 25px;
            color: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .stat-card i {
            font-size: 35px;
        }

        .stat-card h2 {
            font-size: 32px;
            font-weight: bold;
        }

        .purple {
            background: linear-gradient(135deg,#667eea,#764ba2);
        }

        .blue {
            background: linear-gradient(135deg,#36d1dc,#5b86e5);
        }

        .green {
            background: linear-gradient(135deg,#11998e,#38ef7d);
        }

        .orange {
            background: linear-gradient(135deg,#f7971e,#ffd200);
        }

        .content-card {
            border: none;
            border-radius: 15px;
        }

        @media(max-width:767px) {
            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-md-3 col-lg-2 p-0 sidebar">

        <h4><i class="bi bi-speedometer2"></i> Admin Panel</h4>

        <a href="dashboard.php" class="active">
            <i class="bi bi-house"></i> Dashboard
        </a>

        <a href="#users">
            <i class="bi bi-people"></i> Users
        </a>

        <a href="index.php">
            <i class="bi bi-person-plus"></i> Add User
        </a>

    </div>

    <!-- MAIN CONTENT -->
    <div class="col-md-9 col-lg-10 p-0">

        <nav class="navbar px-4 py-3 shadow-sm">
            <div class="container-fluid">
                <h4 class="mb-0">Dashboard</h4>
                <span>Welcome, Admin
                    <i class="bi bi-person-circle fs-3 ms-2"></i>
                </span>
            </div>
        </nav>

        <div class="container-fluid p-4">

            <h3 class="mb-4">Overview</h3>

            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    User registered successfully!
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['deleted'])): ?>
                <div class="alert alert-success">
                    User deleted successfully!
                </div>
            <?php endif; ?>

            <!-- STATISTICS -->
            <div class="row g-4">

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card purple">
                        <i class="bi bi-people"></i>
                        <h2><?= $total ?></h2>
                        <p>Total Users</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card blue">
                        <i class="bi bi-person-check"></i>
                        <h2><?= $total ?></h2>
                        <p>Registered Users</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card green">
                        <i class="bi bi-person-plus"></i>
                        <h2><?= $new ?></h2>
                        <p>New This Week</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="stat-card orange">
                        <i class="bi bi-database"></i>
                        <h2>MySQL</h2>
                        <p>Database System</p>
                    </div>
                </div>

            </div>

            <!-- USERS TABLE -->
            <div class="card content-card shadow-sm mt-5" id="users">

                <div class="card-header bg-white py-3 d-flex justify-content-between">
                    <h5 class="mb-0">Registered Users</h5>

                    <a href="index.php" class="btn btn-primary btn-sm">
                        + Add User
                    </a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">

                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php if ($users && mysqli_num_rows($users) > 0): ?>

                                <?php while ($row = mysqli_fetch_assoc($users)): ?>

                                <tr>
                                    <td><?= $row['id'] ?></td>

                                    <td><?= htmlspecialchars($row['name']) ?></td>

                                    <td><?= htmlspecialchars($row['surname']) ?></td>

                                    <td><?= htmlspecialchars($row['email']) ?></td>

                                    <td><?= htmlspecialchars($row['created_at']) ?></td>

                                    <td>
                                        <a href="update.php?id=<?= $row['id'] ?>"
                                           class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form method="POST" class="d-inline"
                                            onsubmit="return confirm('Are you sure?');">

                                            <input type="hidden" name="id"
                                                value="<?= $row['id'] ?>">

                                            <button type="submit" name="delete"
                                                class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>

                                <?php endwhile; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="6" class="text-center">
                                        No users registered yet.
                                    </td>
                                </tr>

                            <?php endif; ?>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

            <p class="text-center text-muted mt-4">
                © 2026 Registration Dashboard
            </p>

        </div>
    </div>

</div>
</div>

</body>
</html>
