
<?php
include "config.php";

$id = (int)($_GET['id'] ?? 0);

$stmt = $conn->prepare(
    "SELECT * FROM personal_project WHERE id = ?"
);
$stmt->bind_param("i", $id);
$stmt->execute();

$student = $stmt->get_result()->fetch_assoc();

if (!$student) {
    die("Student not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo">Personal<span>Project.</span></a>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php#students">Students</a>
    </div>
</nav>

<section class="contact">
    <p class="section-label">STUDENT MANAGEMENT</p>
    <h2>Edit Student</h2>
    <p>Update the student's information below.</p>
</section>

<div class="form-panel">

    <h2>Update Information</h2>

    <form action="update.php" method="POST">

        <input type="hidden" name="id"
               value="<?= $student['id'] ?>">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name"
                   value="<?= htmlspecialchars($student['name']) ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email"
                   value="<?= htmlspecialchars($student['email']) ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone"
                   value="<?= htmlspecialchars($student['phone']) ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course"
                   value="<?= htmlspecialchars($student['course']) ?>"
                   required>
        </div>

        <button type="submit" name="update" class="primary-button">
            Update Student
        </button>

        <a href="dashboard.php" class="primary-button"
           style="background:#77748e;margin-left:8px">
            Cancel
        </a>

    </form>
</div>

<br><br>

<footer>
    <h3>Personal Project.</h3>
    <p>Student Management System</p>
</footer>

</body>
</html>
