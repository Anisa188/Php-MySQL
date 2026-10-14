<?php

$host = 'localhost'; 
$user = 'root'; 
$db = "db";
$pass = ''; 


try{


 $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// $username = "valeza1";
//$password = password_hash("12345678", PASSWORD_DEFAULT);

//$sql = "INSERT INTO test (username, password) VALUES ('$username', '$password')";

//$conn->exec($sql);

//echo "INSERTED";

//$sql = "ALTER TABLE test ADD COLUMN email VARCHAR(255)";
//$sql = "ALTER TABLE test DROP COLUMN email";
$sql = "Drop TABLE users";


$conn->exec($sql);

echo "alterd";

   
 }catch(Exception $e){


    echo"Not connected".$e->getMessage();
 }




 



?>