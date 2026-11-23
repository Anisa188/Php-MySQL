
<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $id = (int)$_POST['id'];

    $stmt = $conn->prepare(
        "DELETE FROM personal_project WHERE id = ?"
    );

    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Delete failed: " . $stmt->error);
    }

    $stmt->close();
}

header("Location: dashboard.php");
exit;
?>
