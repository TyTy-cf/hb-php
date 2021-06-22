<?php
session_start();
$_SESSION=[];
header('location:panier.php');
session_destroy();
