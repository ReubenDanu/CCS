<?php
if(session_status() != 2){
    session_start();
}
if(array_search('LOGIC',explode('/',$_SERVER['REQUEST_URI'])) == false){
    $page = $_SERVER['REQUEST_URI'];
    $pathURL = $page;
    $page = substr($pathURL, strrpos($pathURL, '/') + 1);
    $_SESSION['page'] =$page;
    if ($page == "") {
        $_SESSION['page'] = 'index.php';
    }
}
session_write_close();
?>