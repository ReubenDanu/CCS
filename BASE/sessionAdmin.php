<?php
if(session_status() == 0 || session_status() == 1){
    session_start();
}
if (count($_SESSION) == 0 || $_SESSION == null) {
    $_SESSION['user'] = '';
    $_SESSION['level'] = '';
    $_SESSION['page'] = '';
    $_SESSION['id'] = '';
    $_SESSION['login'] = 'none';
}
session_write_close();
?>