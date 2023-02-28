<?php
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
$page = $_SESSION['page'];
if (isset($_POST['submit'])) {
    require_once('../../BASE/connection.php');
    require_once('../../BASE/auth.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $date = $_POST['date_report'];
    $report_content = $_POST['content'];
    $title = $_POST['title'];
    $photo = $_FILES['photo']['name'];
    $status = 0;
    $nik = intval($_SESSION['user']);

    $sql = "INSERT INTO REPORT VALUES ('', '$nik', '$date' ,'$title','$report_content','$photo','$status')";

    var_dump($nik, $sql);
    try {
        $result = $mysqli->query($sql);
    } catch (Exception $e) {
        $result = false;
        var_dump($result);
    }

    // if($result){
    //     header('location:../VIEW/'.$page.'?success=1');
    // } else {
    //     header('location:../VIEW/'.$page.'?failed=1');
    // }
    $page = $_SESSION['page'];

} else {
    header('location:../VIEW/' . $page . '?success=0');
}

?>