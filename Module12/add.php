
<?php

include_once('config.php');

if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$message = $_POST['message'];

$sql = "INSERT INTO users (fullname, email, password, gender, country, message)
VALUES (:fullname, :email, :password, :gender, :country, :message)";

$sqlquery = $conn->prepare($sql);

$sqlquery->bindParam(':fullname', $fullname);
$sqlquery->bindParam(':email', $email);
$sqlquery->bindParam(':password', $password);
$sqlquery->bindParam(':gender', $gender);
$sqlquery->bindParam(':country', $country);
$sqlquery->bindParam(':message', $message);

$sqlquery->execute();

echo "INSERTED";

}

?>
