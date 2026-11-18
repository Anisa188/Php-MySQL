
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_database";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection error: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");


$check = mysqli_query($conn, "SHOW TABLES LIKE 'students'");

if (!$check || mysqli_num_rows($check) == 0) {
    die("Tabela students nuk ekziston ne db_database!");
}

?>
