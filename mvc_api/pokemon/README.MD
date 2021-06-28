
### Le TP Pokemon

Liens vers l'api :

Affichez dans un premier temps, seulement 30 pokemons

https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30

Exemple pour un :
https://pokeapi.co/api/v2/pokemon/1/

### LE site

Toujours en MVC

- L'objet pokemon :
* Son nom (name)
* Son image logo (sprites > front_default)
* SOn image officielle (sprites > official-artwork)
* SOn numéro (order)
* Ses types (Il peut y en avoir plusieurs...)
- Prévoir un repo..

- Je veux une première page, qui affiche une liste de pokemon (genre les 30 premiers...)
- A ce moment vous afficherez seulement son nom, avec son image logo, ses types et son numéro


### COmpliquons les choses...

Il faut maintenant afficher un peu plus d'informations de notre pokemon :
(Toujours dans votre classe Pokemon)
* Ses différentes statistiques de base :
    * Dans "stats" > "base_stat"
    * Il y en a 6 en tout, pour :
        * hp
        * attack
        * defense
        * special-attack
        * special-defense
        * speed
    * Il nous faut sauvegarder les 6 informations relatives à notre pokemon
    * Modifier votre code en conséquence

* Préparez-votre code actuel à avoir des liens, lorsque l'on clique sur une image ou un nom de pokemon
    afin d'aller vers une page de profil d'un pokemon. Dans celle-ci il y aura :
    * Le nom du pokemon en titre de page
    * Son official artwork
    * Un rappel de son type
    * Et un tableau de ses statistiques comme tel : https://pokemondb.net/pokedex/charizard
    
### Avancons...

* Je veux maintenant connaître les "abilities" possible de mon pokemon
* Il faut donc créer une nouvelle classe pour les stocker
* Il faudra aussi les créer lors de la récupération de nos pokemons
  (vous les trouverer dans "abilities" du Json d'un pokemon)
* Notez qu'un pokemon peut avoir plusieurs abilities, penser à le prévoir !
    * Une ability doit être représenter par :
        * Son nom
        * Son effet (effect_entries dans le Json), vous sauvegarderez celui en anglais, bien sûr
    
* Une fois que ces informations sont récupérés, vous afficherez les différentes abilities d'un pokemon sur la vue de son profil

### 28/06/2021 

* Faire une pagination, simple : précédent et suivant, vous pouvez faire un "suivant++" qui avance deux fois plus vite et un précédent-- qui recule deux fois plus vite.
* (PS : Vous pouvez réduire la quantité de pokemons à afficher, 0-12 ?!)


* (PS² : trouve run moyen de ne pas perdre nos pokemons lorsque l'on se déplace via pagination)
* Faire un formulaire qui permettent d'interroger notre PokemonRepository et de renvoyer un pokemon en fonction de son nom
* Et si c'est vraiment trop facile pour vous, ajouter la recherche par type



        



