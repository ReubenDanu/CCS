<?php
include('../LOGIC/session.php');
// session_start();
var_dump(session_status(), $_SESSION);
if(session_status() != 2 && $_SESSION['login'] == "none" && $_SESSION['page'] != 'index.php'){
    // header("location:../VIEW/index.php");
    $_SESSION['login'] = 'none';
    var_dump('yes');
}
// var_dump('yes', $_SESSION);
?>