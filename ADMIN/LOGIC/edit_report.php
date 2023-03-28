<?php
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
if (isset($_POST['submit'])) {
    require_once('../../BASE/connection.php');
    require_once('../../BASE/auth.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $date = $_POST['date'];
    $id_report = $_POST['id_report'];
    $report_content = $_POST['report_content'];
    $title = $_POST['title'];
    $photo_temp = $_FILES['photo']['tmp_name'];
    $photo = $_FILES['photo']['name'];
    $status = 'pending';
    $nik = intval($_SESSION['user']);
    
    $sql = "UPDATE `report` SET `id_report` = '$id_report', `date` = '$date', `nik` = '$nik', `title` = '$title', `report` = '$report_content', `photo` =  '$photo', `status` = '$status' WHERE `report`.`id_report` = '$id_report';";
    
    // var_dump($_FILES, $_POST, $sql);
    try {
        $result = $mysqli->query($sql);
    } catch (Exception $e) {
        $result = false;
        // var_dump($result);
    }
    
    if ($result) {
        if (move_uploaded_file($photo_temp, '../../server/data/img/' . $photo)) {
            header('location:../VIEW/' . 'report.php' . '?success=1');
        } else {
            var_dump($_FILES);
            // header('location:../VIEW/' . 'report.php' . 'failed=2');
        }

    } else {
        // header('location:../VIEW/' . 'report.php' . '?failed=1');
    }

} else {
    header('location:../VIEW/' . 'report.php' . '?invalid=true');
}

?>