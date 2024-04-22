<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="register.php" method="post">
        <label for="userName">UserName:</label><br>
        <input type="text" id="userName" name="userName" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="example@example.com" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

