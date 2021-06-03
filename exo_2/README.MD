
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


8. Créer un tableau associatif qui représentera l'espace d'une bataille navale
   Un jeu de bataille navale va de a à j, en ordonné et de 1 à 10, en abscisse
   
   Le jeu sera assimilé à un tableau associatif dont la clé vaut 'a1', 'a2' etc
   Et la valeur 'true' ou 'false' pour indiquer la présence ou non d'un bateau
   
   Affichez votre tableau de jeu (avec ou sans html/css)

   Faites une fonction qui prend en argument une coordonnée (a1) et pour cette coordonnée, renvoit si un bateau est présent sur cette case ou non


9. Reprendre le Yam's et gérer les suites :
   - Petite suite : 4 dés se suivent (1, 2, 3, 4 ou 2, 3, 4, 5 ou 3, 4, 5, 6)
   - Grande suite : les 5 dés se suivent
   

10. Simuler un jeu de 52 cartes :
   - 13 cartes par couleur (pique, trèfle, carreau et coeur)
   - Les cartes vont de 1 à 10 et valet, dame roi

   Vous représenterez dans premier temps le jeu de cartes dans un tableau tout simple
   
   
   Faites une fonction pour mélanger le jeu de cartes
   
   
   Faites une fonction qui permet de piocher X cartes
   





