<?php
if(session_status() != 2){
    session_start();
}
// var_dump($_SESSION);
if(count($_SESSION) == 0 || $_SESSION == null){
    $_SESSION['user'] = '';
    $_SESSION['page'] = '';
    $_SESSION['login'] = 'none';
    $_SESSION['level'] = '';
}
session_write_close();
?>