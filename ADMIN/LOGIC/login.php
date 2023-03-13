<?php
require_once('../../BASE/connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";

$queryResult = $mysqli->query($sql);
$rows = mysqli_num_rows($queryResult);

if($rows == 0){
    $_SESSION['user'] = 'none';
    header("location:../VIEW/login.php?user=invalid");


} else {
    $idUser = "";
    while($data = $queryResult->fetch_assoc()){
        $id = $data['id_staff'];
        $level = $data['level'];
        $user = $data['username'];
    }
    $_SESSION['user'] = $user;
    $_SESSION['level'] = $level;
    $_SESSION['id'] = $id;
    $_SESSION['login'] = 'login';

    header('location:../VIEW/dashboard.php');
}

?>