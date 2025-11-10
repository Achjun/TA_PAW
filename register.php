<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once 'database.php';
        register($_POST);
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
    <h3>Register</h3>
    <form action="" method="POST">
        <label for="NISN">username</label>
        <input type="text" name="nisn"><br>
        <label for="pass">Password</label>
        <input type="text" name="pass"><br>
        <label for="pass">NISN</label>
        <input type="text" name="nisn"><br>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama">
        <button type="submit">Login</button>
    </form>
</body>
</html>