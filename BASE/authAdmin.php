<?php
require_once(__DIR__ . "\\sessionAdmin.php");
require_once(__DIR__ . "\\page.php");
if ((session_status() == 1 || session_status() == 0) && ($_SESSION['login'] == "none" || $_SESSION['user'] == "")) {
    if ($_SESSION['page'] != 'index.php') {

        header('location:../VIEW/login.php');
    }
    
}
?>