<?php
session_start();
$page = $_SERVER['REQUEST_URI'];
$pathURL = $page;
$_SESSION['page'] = substr($pathURL, strrpos($pathURL, '/') + 1);
// var_dump($_SESSION['page']);
session_write_close();
?>