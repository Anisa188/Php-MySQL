<?php

include_once ('config.php');

if(isset($_POST['sumbit'])){
   
$name = $_POST['name'];

$username = $_POST['username'];

$email = $_POST['email'];

$sql = "INSERT INTO users (name, username, email) VALUES (:name, :username, :email)";

$sqlquary = $conn->prepare($sql);

$sqlquary->bindParam(':name', $name);
$sqlquary->bindParam(':username', $username);
$sqlquary->bindParam(':email', $email);

$sqlquary->execute();

echo "INSERED";

}
