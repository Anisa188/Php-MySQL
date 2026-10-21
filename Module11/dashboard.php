<!DOCTYPE html>
<html lang="en">



<style>
    table,td,th{
        border: 1px,solid,blue;
        border-collapse: collapse;
        background-color: rgb(190, 224, 235)
    }
    td,th{
        padding: 10px,20px;

    }
   

</style>


<body>

<?php
include_once('config.php');
$sql = "Select * From users";
$getUsers = $conn -> prepare($sql);
$getUsers-> execute();
$users = $getUsers->fetchAll();

?>
    
<table>
    <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
    </thead>
    <tbody>
        <?php
        foreach($users as $user){
        ?>
        <tr>
            <td><?= $user['id'] ?> </td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>

        <?php }

        ?>
    </tbody>
</table>
<a href = "index1.php">Add users </a>


</body>
</html>