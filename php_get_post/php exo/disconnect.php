<?php
include 'user.php';
include 'header.php';
session_destroy();
$_SESSION = [];
header('location: preload.php');
?>

<h1>DISCONNECT PAGE</h1>
