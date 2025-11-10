<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once 'database.php';
        login($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="user">Username</label>
        <input type="text" name="username"><br>
        <label for="pass">Password</label>
        <input type="text" name="password"><br>
        <button type="submit">Login</button>
    </form>
    <a href="register.php">Register</a>
</body>
</html>