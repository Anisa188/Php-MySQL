
<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

    $id = (int)$_POST['id'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $course = trim($_POST['course']);

    $stmt = $conn->prepare(
        "UPDATE personal_project
         SET name = ?, email = ?, phone = ?, course = ?
         WHERE id = ?"
    );

    $stmt->bind_param(
        "ssssi",
        $name,
        $email,
        $phone,
        $course,
        $id
    );

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit;
    }

    die("Update failed: " . $stmt->error);
}

header("Location: dashboard.php");
exit;
?>
