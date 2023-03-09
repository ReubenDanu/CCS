<?php
session_start();
// var_dump($_SESSION);
if(count($_SESSION) == 0 || $_SESSION == null){
    $_SESSION['user'] = '';
    $_SESSION['page'] = '';
    $_SESSION['login'] = 'none';
}
session_write_close();
?>