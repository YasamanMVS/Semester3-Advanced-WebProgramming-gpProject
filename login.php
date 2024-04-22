<?php
global $conn;
include 'db_connect.php';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn -> prepare("SELECT ID, userName, password FROM Users WHERE email = ?");
    $stmt -> execute([$email]);
    if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['username'] = $user['userName'];
            echo "Login successful";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="example@example.com" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="LOGIN">
    </form>
</body>
</html>
