<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
    <a href="../LOGIC/logout.php">Logout</a>
    <a href="./login.php">Login</a>
</body>
</html>
<?php
include('../LOGIC/auth.php');
include('../LOGIC/page.php');
var_dump($_SESSION['login'], $_SESSION['page'], $_SESSION['user'])
?>