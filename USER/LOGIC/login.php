<?php
include('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM community WHERE username = ASDFASDF AND password SDFGSDFG";

$queryResult = $mysqli->query($sql);
$rows = mysqli_num_rows($queryResult);

if($rows == 0){
    $pathURL = $_SESSION['page'];
    $page = substr($pathURL, strrpos($pathURL, '/') + 1);

    if($page == 'login.php'){
        header("location:../login.php");
    }
    // header("location:../index.php");
    $_SESSION['user'] = 'none';
    var_dump($_SESSION['user']);

} else {
    $idUser = "";
    while($data = $queryResult->fetch_assoc()){
        $idUer = $data['nik'];
    }
    $_SESSION['user'] = $idUser;
    var_dump($_SESSION['user']);
    // header('location:../index.php');
}

?>