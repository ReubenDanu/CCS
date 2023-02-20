<?php
require_once('../../BASE/connection.php');
session_start();
if($_SESSION['login'] == 'login'){
    header('location:../VIEW/'.$_SESSION['page']);
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM community WHERE username = '$username' AND password ='$password'";
$queryResult = $mysqli->query($sql);
$rows = $queryResult->num_rows;

if($rows == 0){
    $page = $_SESSION['page'];

    
    if($_SESSION['user'] != 'none'){
        header("location:../VIEW/index.php");
        
    } else {
        header("location:../VIEW/login.php?user=invalid");
    }
    
    
} else {
    $idUser = "";
    $data = $queryResult->fetch_assoc();
    var_dump($data);
    $idUser = $data['nik'];
    $_SESSION['user'] = $idUser;
    $_SESSION['login'] = 'login';
    var_dump($_SESSION['page']);
    header('location:../VIEW/'.$_SESSION['page']);
}
?>