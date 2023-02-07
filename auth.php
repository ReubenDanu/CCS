<?php
if(session_status() != 2 && isset($_SESSION['login'])){
    header("location:index.php.html");
    $_SESSION['login'] = 'none';
}
?>