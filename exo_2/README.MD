
## Bases de PHP - Jour 2

(Par soucis de lisibilité, pour les exercices de ce jour, il est préférable de créer un fichier par question...)

1. A partir des notes de la question 5 de la journée précédente, vous les ajouterez dans une table :
* Header : "Nom" et "Moyenne"
* Contenu : le nom de l'étudiant et sa moyenne

Vous pouvez réutiliser la fonction de moyenne faites la veille...


2. Écrivez une fonction pour supprimer les doublons d’un tableau :
   Exemple :
   [1, 2, 2, 3, 3, 3, 4, 5, 5]
   Résultat attendu :
   [1, 2, 3, 4, 5]


3. Avec **le moins de lignes de code possible**, proposez moi un algorithme qui, pour un nombre donné, affiche la table de multiplication liée.
   Par exemple :
   Si je demande 1, je veux voir :
   * 1x1 = 1
   * 1x2 = 2
   * etc
     Et ce jusqu'à 12


4. Faites une fonction qui prend en argument une chaîne de caractères (LONGUE)
   Cette fonction doit afficher les 15 premiers caractères puis '...'
   Par exemple :
   * Je passe la chaîne : 'Lorem quisque class vestibulum'
   * La fonction doit afficher 'Lorem quisque c...'


5. Faites une fonction checkPassword, dont le but est de vérifier la validité d'un mot de passe, qui sera pris en argument
   Un mot de passe est considéré valide lorsqu'il fait plus de 9 caractères, et qu'il contient au moins le caratère '@'
   La fonction renverra un booléen pour indiquer la validité du mot de passe


6. Faire une fonction getDamages(), qui prend en argument un entier, correspondant aux dégâts d'un héros
   La fonction doit renvoyer les dégâts effectués
   Cependant, les dégâts peuvent être critiques, c'est dire qu'ils infligent 150% des dégâts normaux
   Les chances de coup critique sont de 15%
   Vérifiez votre fonction à partir des héros utilisés la veille


7. Faire une fonction qui simule un jeu de yatzee (https://fr.wikipedia.org/wiki/Yahtzee)
   Le Yatzee est un jeu de lancer de dé (au nombre de 5)
   Vous devrez afficher chaque lancé de dé, on va rester simple et afficher quelque chose de ce style :
   (1) (4) (6) (2) (4)
   
   Une fois le lancé affiché, la fonction doit informer l'utilisateur de ce qu'il a fait :
   - Brelan (3 dés du même résultat)
   - Carré (4 dés du même résultat)
   - Full (3 dés du même résultat et 2 dés du même résultat)
   - Yams (5 dés du même résultat)
   - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
   - Grande suite : les 5 dés se suivent


7bis. Faire une fonction qui permet d'ajouter des 'fe' après chaque voyelle d'une chaîne de caractère, et répéter la voyelle précédente, passée en paramètre
      
   // transform("Bonjour") => "Bofeonjofeoufeur"


8. Simuler un jeu de 52 cartes :
   - 13 cartes par couleur (pique, trèfle, carreau et coeur)
   - Les cartes vont de 1 à 10 et valet, dame roi

   - Algo : 
      * Créer au préalable un tableau de 4 catégories (pour chaque couleur, pique, coeur etc)
      * Créer au préalable un tableau des valeurs des cartes (1,2, 3, ..., D, R)
      * Créer un tableau vide
      * pour chaque catégorie, faire
         * pour chaque valeur, faire
            *  ajouter la combinaison valeur + catégorie dans un tableau
         * fin pour
      * fin pour
      * retourne le tableau des cartes remplies


   Vous représenterez dans premier temps le jeu de cartes dans un tableau tout simple
   
   
   Faites une fonction pour mélanger le jeu de cartes
   
   
   Faites une fonction qui permet de piocher X cartes


9. Créer un tableau associatif qui représentera l'espace d'une bataille navale
   Un jeu de bataille navale va de a à j, en ordonné et de 1 à 10, en abscisse

   Le jeu sera assimilé à un tableau associatif dont la clé vaut 'a1', 'a2' etc
   Et la valeur 'true' ou 'false' pour indiquer la présence ou non d'un bateau

   Affichez votre tableau de jeu (avec ou sans html/css)

   Faites une fonction qui prend en argument une coordonnée (a1) et pour cette coordonnée, renvoit si un bateau est présent sur cette case ou non


9bis. Faire une fonction qui, pour une coordonnée donnée, permet de récupérer les cases voisines (elle retourne un tableau de coordonnées), sur une certaine distance (passée en paramètre)
      On retourne, bien sûr, que les cases existantes dans notre quadrillage d'origine.
      
      Optimisation : faire en sorte qu'elle puisse fonctionner aussi bien à l'horizontale, qu'à la verticale


10. Jeu des petits cochons :
   - Un cochon peut avoir : 4 pattes, 2 yeux, 1 queue, 2 oreilles
   - Une fois le cochon assemblé, vous avez gagné !
   - Pour se faire il faut lancer un dé spécial :
      - Ce dé est composé de 6 faces :
      * 3 avec des pattes
      * 1 avec un oeil
      * 1 avec une queue
      * 1 avec une oreille
        (Les faces avec les pattes, se sont pas toutes collées)
        
   Objectif (fonction à faire) :
   - Vous devez compter en combien de lancé de dé vous avez réussi à assembler votre cochon ! 



