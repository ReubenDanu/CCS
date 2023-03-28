<?php
if(session_status() == 0 || session_status() == 1){
    session_start();
}
$page = $_SESSION['page'];
if(isset($_POST['submit'])){
    require_once('../../BASE/connection.php');
    require_once('../../BASE/authAdmin.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $id_report = $_POST['id_report'];
    $date_response = $_POST['date_response'];
    $response = $_POST['response'];
    $id_staff = intval($_SESSION['id']);
    
    
    $sql1 = "INSERT INTO `response` (`id_response`, `id_report`, `date`, `response`, `id_staff`) VALUES (NULL, '$id_report', '$date_response', '$response', '$id_staff')";
    try{
        $result = $mysqli->query($sql1);
        $sql2 = "UPDATE `report` SET `status` = 'completed' WHERE `report`.`id_report` = '$id_report';";
        $result = $mysqli->query($sql2);
    }catch (Exception $e){
        $result = false;
        var_dump($result);
    }
    
    if($result){
        header('location:../VIEW/respond.php?success=1');
    } else {
        header('location:../VIEW/'.$page.'?failed=1');
    }
    $page = $_SESSION['page'];
} else {   
    header('location:../VIEW/'.$page.'?failed=true');
}

?>