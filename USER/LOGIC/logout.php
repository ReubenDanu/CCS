<?php
session_start();
session_unset();
header('location:../VIEW/index.php');
?>