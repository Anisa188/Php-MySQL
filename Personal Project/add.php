
<?php
include "config.php";

$error = "";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $course = trim($_POST['course']);

    if ($name && $email && $phone && $course) {
        $stmt = $conn->prepare(
            "INSERT INTO personal_project
            (name, email, phone, course)
            VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $name, $email, $phone, $course);

        if ($stmt->execute()) {
            header("Location: dashboard.php");
            exit;
        }

        $error = "Something went wrong!";
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Student</title>
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
    <p class="section-label">STUDENT REGISTRATION</p>
    <h2>Add New Student</h2>
    <p>Complete the form below to register a new student.</p>
</section>

<div class="form-panel">

    <h2>Student Information</h2>

    <?php if ($error): ?>
        <p style="color:red;margin-bottom:15px">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name"
                   placeholder="Enter full name" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email"
                   placeholder="Enter email address" required>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone"
                   placeholder="Enter phone number" required>
        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course"
                   placeholder="Enter course" required>
        </div>

        <button type="submit" name="submit" class="primary-button">
            Save Student
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
