<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=:id";

$getUsers = $conn->prepare($sql);

$getUsers->bindParam(':id', $id);

$data = $getUsers->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
    <input type="text" name="username" value="<?php echo $data['username'] ?>">
    <input type="text" name="name" value="<?php echo $data['name'] ?>">
    <input type="email" name="email" value="<?php echo $data['email'] ?>">
    

    <br><br>
    <button type="submit" name ="update">Update</button>


</form>
<a href="dashboard.php">Go to Dashboard</a>



</body>
</html>