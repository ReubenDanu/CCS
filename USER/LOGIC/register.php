<?php
if(isset($_POST)){
    include('../../BASE/connection.php');
    var_dump($_POST);
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $sql = "INSERT INTO community (nik, name, email, username, password, telp) VALUES ('$nik', '$name', '$email', '$username', '$password', '$telp')";

    $result = $mysqli->query($sql);

    if($result == true){
        $_SESSION['user'] = 'user';
        $_SESSION['nik'] = $nik;
        header('location:../VIEW/dashboard.php');
    } else if($result == false){
        header('location:register.php?invalid=true');
    }
}else {
    header("location:../VIEW/".$_SESSION['page']);
}
?>