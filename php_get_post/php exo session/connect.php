<?php
include 'user.php';
include 'header.php';

$error = true;

if (isset($arrayUser[$_POST['pseudo']])) {
    if ($arrayUser[$_POST['pseudo']] === $_POST['mdp']) {
        $error = false;
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('location: preload.php');
    }
}

if ($error === true) {
    header('location: preload.php?error=err');
}
?>