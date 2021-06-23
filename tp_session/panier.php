<?php
session_start();
include_once 'item.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        .articles{
            display: flex;
            align-items: center;
            text-align: center;
            gap: 10px;


        }
        .logo{
            width: 250px;
            height: 150px;

        }
        .article:hover{
            background-color: lightgray;
            cursor: crosshair;
            color: white;
        }
        .article {
            display: flex;
            width: 300px;
            flex-direction: column;
            justify-content: center;
            padding:10px;
            margin: 10px;
            background-color: grey;
        }
        a{
            text-align: center;
            text-decoration: none;
            border: 1px solid blue;
            color:white ;
            background-color: lightblue;
        }
        .somme {
            display: flex;
            width: 100%;
            justify-content: center;
            background-color: lightgray;
        }
        .display {
            display: flex;
            align-items: center;
            flex-direction: column;

        }
        h3 {
            font-size: 22px;
        }
        .delete {
            background-color: red;
            color: white;
            border: #930000 solid 1px;
        }
        .vider{
            background-color: red;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Mon panier</h1>
<div class="lien">
    <a href="accueil.php">Retour à la page d'accueil</a>
    <a class="vider" href="viderPanier.php">Vider le panier</a>
</div>
    <div class="display">
        <div class="articles">
    <?php
        $somme = 0;
        foreach ($_SESSION as $key => $quantity){
            $itemIndex = substr($key, 4, strlen($key));
            $arrayKeys = array_keys($item);
            $selectedConsole = $arrayKeys[$itemIndex];
            if($quantity > 0) {
                echo '<div class="article">';
                echo '<h2>'.'Console : '.$selectedConsole.'</h2>';
                echo 'Quantité : '.$quantity;
                echo '<form method="post" action="deletePanier.php">';
                echo 'Prix : '.$item[$selectedConsole]['price'].' €';
                $somme+=$item[$selectedConsole]['price']*$quantity;
                echo '<img class="logo" src="'.$item[$selectedConsole]['logo'].'">';
                echo '<button type="submit" name="deleteItem'.$itemIndex.'" class="delete">Supprimer</button>';
                echo'</form>';
                echo '</div>';
            }
        }
    ?>
</div>
    <?php
    echo '<div class="somme">';
    echo '<h3>Le montant de votre panier est de : '.$somme.' €</h3>';
    echo '</div>';
    echo '</div>';

    ?>

</body>
</html>
