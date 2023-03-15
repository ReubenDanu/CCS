<?php
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
$page = strstr($_SESSION['page'], "?", true);
if (isset($_POST['submit'])) {
    require_once('../../BASE/connection.php');
    require_once('../../BASE/authAdmin.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $id_report = $_POST['id_report'];
    $sql = "UPDATE `report` SET `status` = 'process' WHERE `report`.`id_report` = '$id_report';";

    try {
        $result = $mysqli->query($sql);
    } catch (Exception $e) {
        $result = false;
        var_dump($result);
    }

    if($result){
        echo "<script>alert('Laporan berhasil di verifikasi')</script>";
        header('location:../VIEW/verify.php?success=true');
    } else {
        header('location:../VIEW/verify.php?success=false');
    }

} else {
    header('location:../VIEW/verify.php?invalid=true');
}

?>