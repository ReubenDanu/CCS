<?php
include('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM community WHERE username = $username AND password $password";

$queryResult = $mysqli->query($sql);
$rows = mysqli_num_rows($queryResult);

if($rows == 0){
    $pathURL = $_SESSION['page'];
    $page = substr($pathURL, strrpos($pathURL, '/') + 1);

    if($page == 'login.php'){
        header("location:login.php");
    }
    header("location:index.php.html");
    $_SESSION['user'] = 'none';

} else {
    $idUser = "";
    while($data = $queryResult->fetch_assoc()){
        $idUser = $data['nik'];
    }
    $_SESSION['user'] = $idUser;

    var_dump($_SESSION['user']);
}

?>