
<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request!");
}

if (!isset($_POST['id']) || !ctype_digit($_POST['id'])) {
    die("ID jo valide!");
}

$id = (int) $_POST['id'];

$stmt = $conn->prepare("DELETE FROM products WHERE Id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>
