<?php
$conn = new mysqli("localhost", "root", "", "personal_project");

if ($conn->connect_error) {
    die("Gabim në lidhje: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>