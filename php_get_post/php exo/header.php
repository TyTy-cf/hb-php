<?php
session_start();
if (isset($_SESSION['pseudo'])) {
    echo '<div>' . $_SESSION['pseudo'] . '</div><br>';
    echo '<a href="disconnect.php">se deconnecter</a>';
}