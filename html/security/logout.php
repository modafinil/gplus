<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['logged_in']);
header("location:index.php");
exit;
?>
