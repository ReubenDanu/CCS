<?php
session_start();
$_SESSION['page'] = $_SERVER['REQUEST_URI'];
?>