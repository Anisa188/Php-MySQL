
<?php
include 'config.php';

$id = $_GET['id'] ?? '';

if (!ctype_digit((string)$id) || (int)$id <= 0) {
    die("Invalid student ID");
}

$stmt = mysqli_prepare($conn, "SELECT * FROM students WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$student = mysqli_fetch_assoc($result);

if (!$student) {
    die("Student not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-card">

    <h3 class="mb-4">Update Student</h3>

    <form action="update.php" method="POST">

        <input type="hidden" name="id"
               value="<?php echo $student['id']; ?>">

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name"
                   class="form-control"
                   value="<?php echo htmlspecialchars($student['first_name']); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name"
                   class="form-control"
                   value="<?php echo htmlspecialchars($student['last_name']); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email"
                   class="form-control"
                   value="<?php echo htmlspecialchars($student['email']); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone"
                   class="form-control"
                   value="<?php echo htmlspecialchars($student['phone']); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            <input type="text" name="course"
                   class="form-control"
                   value="<?php echo htmlspecialchars($student['course']); ?>"
                   required>
        </div>

        <button type="submit" name="update"
                class="btn btn-success w-100">
            Update Student
        </button>

    </form>

    <a href="dashboard.php" class="btn btn-secondary w-100 mt-3">
        Back to Dashboard
    </a>

</div>

</body>
</html>
