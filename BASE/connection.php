<?php
$host = "localhost";
$user = "root";
$password = "";
// $db = "community_complient_services";
$db = "community_complient_services_sekolah";

$mysqli = new mysqli($host, $user, $password, $db, 3308);
// $mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');
?>