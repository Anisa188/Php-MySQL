
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: dashboard.php");
    exit;
}

$id = $_POST['id'] ?? '';

if (!ctype_digit((string)$id) || (int)$id <= 0) {
    die("Invalid student ID");
}

$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: dashboard.php");
    exit;
}

die("Delete failed: " . mysqli_error($conn));
?>
