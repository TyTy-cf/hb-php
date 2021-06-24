<?php

include 'session.php';
$_SESSION['itemsCart'] = [];
session_destroy();
header('location: ../view/cart.php');