
<?php
include 'config.php';

if (isset($_POST['save'])) {

    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = mysqli_prepare($conn,
        "INSERT INTO users (name, surname, email, password)
         VALUES (?, ?, ?, ?)");

    mysqli_stmt_bind_param(
        $stmt, "ssss",
        $name, $surname, $email, $password
    );

    try {
        mysqli_stmt_execute($stmt);
        header("Location: dashboard.php?success=1");
        exit;
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            echo "This email is already registered!";
        } else {
            echo "Registration failed. Please try again.";
        }
    }

} else {
    header("Location: index.php");
    exit;
}
?>
