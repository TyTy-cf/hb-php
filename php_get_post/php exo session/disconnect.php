<?php
include 'user.php';
include 'header.php';
session_destroy();
$_SESSION = [];
header('location: index.php');
?>

<h1>DISCONNECT PAGE</h1>
