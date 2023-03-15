<?php
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
// $page = strstr($_SESSION['page'], "?", true);
if (isset($_POST['submit'])) {
    require_once('../../BASE/connection.php');
    require_once('../../BASE/auth.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $date = $_POST['date_report'];
    $report_content = $_POST['content'];
    $title = $_POST['title'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    $photo = $_FILES['photo']['name'];
    $status = 'pending';
    $nik = intval($_SESSION['user']);

    $sql = "INSERT INTO `report` (`id_report`, `date`, `nik`, `title`, `report`, `photo`, `status`) VALUES (NULL, '$date', '$nik','$title','$report_content','$photo','$status')";

    try {
        $result = $mysqli->query($sql);
    } catch (Exception $e) {
        $result = false;
        var_dump($result);
    }

    if($result){
        if(move_uploaded_file($photo_temp, '../../server/data/img/'.$photo)){
            header('location:../VIEW/'.'report.php'.'?success=1');
        }else {
            header('location:../VIEW/'.'report.php'.'failed=2');
        }
        
    } else {
        header('location:../VIEW/'.'report.php'.'?failed=1');
    }

} else {
    header('location:../VIEW/' . 'report.php' . '?invalid=true');
}

?>