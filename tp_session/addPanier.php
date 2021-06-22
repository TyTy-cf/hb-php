<?php
session_start();
/*$_SESSION=[];
//session_destroy();*/

include_once 'item.php';

$selectedConsole = null;
$itemIndex = 0;

foreach ($_POST as $content => $empty) {
    $itemIndex = substr($content, strlen('addPanier'), strlen($content));
    $arrayKeys = array_keys($item);
    $selectedConsole = $arrayKeys[$itemIndex];
}

if(!isset($_SESSION['item'.$itemIndex])) {
    $_SESSION['item'.$itemIndex] = 1;
}else{
    $_SESSION['item'.$itemIndex]+=1;
}


//if(isset($_POST['addPanier1'])){
//    if(!isset($_SESSION['ps5'])){
//        $_SESSION['ps5']=1;
//    }else{
//        $_SESSION['ps5']+=1;
//    }
//}
//if(isset($_POST['addPanier2'])){
//    if(!isset($_SESSION['xbox'])){
//        $_SESSION['xbox']=1;
//    }else{
//        $_SESSION['xbox']+=1;
//    }
//}
//if(isset($_POST['addPanier3'])){
//    if(!isset($_SESSION['switch'])){
//        $_SESSION['switch']=1;
//    }else{
//        $_SESSION['switch']+=1;
//    }
//}
//if(isset($_POST['addPanier4'])){
//    if(!isset($_SESSION['master'])){
//        $_SESSION['master']=1;
//    }else{
//        $_SESSION['master']+=1;
//    }
//}
header('location:accueil.php');





