<?php
include('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
var_dump($sql);

$queryResult = $mysqli->query($sql);
$rows = mysqli_num_rows($queryResult);

if($rows == 0){
    $_SESSION['user'] = 'none';
    header("location:../VIEW/login.php?user=invalid");


} else {
    $idUser = "";
    while($data = $queryResult->fetch_assoc()){
        $idUser = $data['id_staff'];
        $idUser = $data['level'];
    }
    $_SESSION['user'] = $idUser;
    $_SESSION['level'] = $level;

    header('location:../VIEW/dashboard.php');
}

?>