<!-- filepath: c:\xampp\htdos\EVENT MANAGEMENT SYSTEM\logout.php -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>