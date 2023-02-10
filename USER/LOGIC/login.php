<?php
include('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM community WHERE username = '$username' AND password ='$password'";
$queryResult = $mysqli->query($sql);
var_dump($sql);
$rows = mysqli_num_rows($queryResult);

if($rows == 0){
    $page = $_SESSION['page'];

    if($page == 'login.php'){
        header("location:../VIEW/login.php");
        var_dump($page, 'yes');
    }else{
        header("location:../VIEW/index.php");
        $_SESSION['user'] = 'none';
    }    

} else {
    $idUser = "";
    while($data = $queryResult->fetch_assoc()){
        $idUser = $data['nik'];
    }
    $_SESSION['user'] = $idUser;
    $_SESSION['login'] = 'login';
    var_dump($_SESSION['user']);
    header('location:../VIEW/index.php');
}

?>