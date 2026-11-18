
<?php
include 'config.php';

if (!isset($_POST['update'])) {
    header("Location: dashboard.php");
    exit;
}

$id = $_POST['id'] ?? '';

if (!ctype_digit((string)$id) || (int)$id <= 0) {
    die("Invalid ID");
}

$first = trim($_POST['first_name']);
$last = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$course = trim($_POST['course']);

if (
    $first === '' || $last === '' ||
    $email === '' || $phone === '' || $course === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    die("Please check the entered information.");
}

$sql = "UPDATE students SET
        first_name = ?,
        last_name = ?,
        email = ?,
        phone = ?,
        course = ?
        WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssssi",
    $first, $last, $email, $phone, $course, $id
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: dashboard.php");
    exit;
}

die("Update failed: " . mysqli_error($conn));
?>
