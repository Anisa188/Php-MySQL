<?php
$host = 'localhost'; 
$user = 'root'; 
$db = "db";
$pass = ''; 


 try{


 $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

 $sql = "CREATE TABLE test (id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 username VARCHAR(255) NOT NULL, 
 password VARCHAR(255) NOT NULL)";

 $conn->exec($sql);

    echo "TEST";
 }catch(Exception $e){


    echo"Not connected".$e->getMessage();
 }



?>