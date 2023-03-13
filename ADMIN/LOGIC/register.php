<?php
require_once('../../BASE/connection.php');
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = 'admin';

$sql = "SELECT * FROM staff WHERE username='$username'";
$result = $mysqli->query($sql);
$rows = $result->num_rows;
echo $rows;
if($rows > 1){
    header('location:register.php?username=exists');
}else{
    $sql = "INSERT INTO staff (id_staff, name, username, password, telp, level) VALUES ('', '$name', '$username', '$password', '$telp','admin')";
    $result = $mysqli->query($sql);

    if($result == true){
        $sql = "SELECT id_staff FROM staff WHERE username='$username'";
        $result = $mysqli->query($sql);
        $id = $result->fetch_assoc();
        if(session_status() != 2){
            session_start();
        }
        $_SESSION['user'] = $username;
        $_SESSION['id'] = $id['id_staff'];
        $_SESSION['level'] = 'admin';
        $_SESSION['login'] = 'login';
        var_dump($_SESSION);
        header('location:dashboard.php');
    } else if($result == false){
        header('location:register.php?invalid=true');
    }
}
?>