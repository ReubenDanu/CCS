<?php
include('./connection.php');

if(count($_FILES['files']) > 1){
    $photo = array(); //input as multi array
    foreach($_FILES as $file){
        array_push($photo, $file);
    }
} else {
    $photo = $_FILES['files']['name'];
}

$date = $_POST['input-date'];
$title = $_POST['title'];
$content = $_POST['content'];
$nik = $_SESSION['nik'];
$status = 'pending';

$sql = "INSERT INTO report (id_report, date, nik, report , photo, status) VALUES ('', $date, $nik, $title, $content, $photo, $status";



$temporaryFile = $_FILES['files']['tmp_name'];


?>