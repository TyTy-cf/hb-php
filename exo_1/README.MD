
## Bases de PHP

1. A partir d’un âge, on doit indiquer l’année de
   naissance
   

2. A partir de ce tableau [ 12, 15, 19, 2], calculer la
   moyenne des valeurs.
   

3. A partir d’un prix HT unitaire d’un produit, ainsi
   que le nombre de produit. On veut connaitre le
   total TTC arrondi à 2 chiffres après la virgule.
   

4. A partir de la température d’un volume d’eau,
      on veut savoir dans quel état est l’eau (solide,
      liquide ou gaz)
   (positif : liquide, négatif : solide, au dela de 70° [indicatif] : gaz)
   

5. On souhaite stocker les notes d'étudiants, vous utiliserez un tableau associatif pour ça
   
   Données :
   * Albert : 12, 8, 9, 7, 13
   * Michel : 14, 13, 12, 11, 10
   * Vincent : 17, 16, 15, 18, 13
   
   Faite une fonction qui prend en paramètre un tableau de note et permet de calculer la moyenne de l'étudiant


6. Faire une fonction qui prend 2 arguments en paramètres : un prix et un pourcentage.
   
   La fonction doit renvoyer le prix augmenté avec le pourcentage 


## Pour la suite du TP, nous allons simuler un combat de héros

1. Faites une fonction qui prend en paramètres 6 arguments, les 3 premiers seront les clés d'un tableau et les 3 suivantes leur valeur respective
   La fonction devra renvoyer le tableau créé et initialisé.
   Tester votre fonction avec :
   

   * name : Warrior
   * hp : 540
   * damages : 25
     

   * name : Mage
   * hp : 430
   * damages : 31

   
2. Faites une fonction qui prend en paramètre un tableau de "Héros", cette fonction doit afficher un héros sous la forme :
   * Nom : xxxx
   * Point de vie : xxxx
   * Dégâts : xxxx
   

   Testez votre fonction


3. Faites une fonction qui prend en pramètre deux tableaux de héros
   
   La fonction doit faire "combattre" chaque héros, un héros inflige des blessures à l'autre, à partir de ses dégâts (damages), aux points de vie (hp).
   C'est à dire que l'on va soustraire aux point de vie d'un héro, les dégâts de l'autre.
   

   Appelez cette fonction dans une boucle, tant qu'un héro est en vie, on fait combattre les héros chacun leur tour.



