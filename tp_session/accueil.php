<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .articles {
            display: flex;
            flex-wrap: wrap;
            margin-right: auto;
            margin-left: auto;
        }
        .article {
            width: 280px;
            height: 340px;
            margin: 10px;
            text-align: center;
            max-width: 33.3333333333%;
            background-color: grey;
        }
        .article:hover {
            background-color: lightgray;
            cursor: pointer;
            color: white;
        }
        .logo {
            width: 200px;
            height: 150px;
        }
        a {
            text-align: center;
            text-decoration: none;
            border: 1px solid blue;
            color: black;
            background-color: lightblue;
            padding: 0.2em;
        }
    </style>
    <title>Document</title>
</head>
    <body>
        <div>
            <a href="panier.php">Accéder à mon panier</a>
        </div>
        <div class="articles">
            <?php
                include_once 'item.php';
                $nb = 0;
                foreach($item as $key => $value){
                    echo '<div class="article">';
                    echo '<h2>'.'Console : '.$key.'</h2>';
                    foreach($value as $key1 => $value1) {
                        if ($key1 ==='price') {
                            echo '<h3>'.$key1.' : '.$value1.' €</h3>';
                        } else {
                            echo '<img class="logo" src="'.$value1.'">';
                            echo '<br>';
                            echo '<form method="post" action="addPanier.php">';
                            echo '<button type="submit" name="addPanier'.$nb.'" class="add">Ajouter au panier</button>';
                            echo '</form>';
                        }
                    }
                    echo'</div>';
                    $nb++;
                }
                echo '</div>';
            ?>
        </div>
    </body>
</html>
