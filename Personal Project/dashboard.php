
<?php
include "config.php";

$result = $conn->query("SELECT COUNT(*) AS total FROM personal_project");
$total = $result->fetch_assoc()['total'];

$students = $conn->query(
    "SELECT * FROM personal_project ORDER BY id DESC LIMIT 5"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo">Personal<span>Project.</span></a>

    <div class="nav-links">
        <a href="index.php">Website</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php#students">Students</a>
        <a href="add.php" class="nav-button">Add Student +</a>
    </div>
</nav>

<section class="students">
    <p class="section-label">ADMINISTRATION</p>
    <h2>Admin Dashboard</h2>
    <p class="student-count">Welcome to your management panel.</p>

    <div class="about-cards">
        <div class="about-card">
            <span>👨‍🎓</span>
            <h3>Total Students</h3>
            <h2><?= $total ?></h2>
        </div>

        <div class="about-card">
            <span>📋</span>
            <h3>Student Records</h3>
            <h2><?= $total ?></h2>
        </div>

        <div class="about-card">
            <span>⚙️</span>
            <h3>System Status</h3>
            <h2>Active</h2>
        </div>
    </div>

    <br><br>
    <div class="student-table">
        <h2>Recent Students</h2>

        <div style="overflow-x:auto">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>

            <?php if ($students->num_rows > 0): ?>
                <?php while($row = $students->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['course']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        |
                        <a href="index.php#students">View</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6">No students found.</td></tr>
            <?php endif; ?>
        </table>
        </div>

        <br>
        <a href="add.php" class="primary-button">+ Add New Student</a>
    </div>
</section>



</body>
</html>
