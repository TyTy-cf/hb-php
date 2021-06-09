
## Exo RPG

### Créer une classe "Race"

- name : string


### Créer la classe "Hero"

- name : string
- race : Race
- level : int
- hp : int
- hpMax : int 
- mana : int
- manaMax : int
- strength : int
- agility : int
- intelligence : int
- defense : float
- scoreCriticalStrike : int
- criticalDamage : float
- damageMin : int
- damageMax : int


* Par défaut :
    * tous les héros créés sont de niveau 1
    * scoreCriticalStrike : 12%
    * criticalDamage : 150%

## Héritage

* Notes importante :
  * 1 strength = 19 hp
  * 1 intelligence = 17 mana
  * defense = agility / 6
  * Les dégâts d'un héro sont basés depuis sa caractéristique principale
    * damageMin = carac * 1.2
    * damageMiax = carac * 1.4
  * Le scoreCriticalStrike varie en fonction de la caractéristique principale : carac * 0.08

### Héro : Mage

* Un Mage est un Hero
* On doit pouvoir renseigner le nom du Mage à sa création
* Un Mage commence toujours avec ces caractéristiques :
  * 15 strength
  * 8 agility
  * 27 intelligence
* Un Mage est un héro Intelligence (caractéristique principale)

### Héro : Warrior

* Un Warrior est un Hero
* On doit pouvoir renseigner le nom du Warrior à sa création
* Un Warrior commence toujours avec ces caractéristiques :
  * 24 strength
  * 12 agility
  * 14 intelligence
* Un Warrior est un héro Strength (caractéristique principale)

### Héro : Rogue

* Un Rogue est un Hero
* On doit pouvoir renseigner le nom du Rogue à sa création
* Un Rogue commence toujours avec ces caractéristiques :
  * 13 strength
  * 26 agility
  * 11 intelligence
* Un Rogue est un héro Agility (caractéristique principale)


/!\ PETITE SUBTILITE : Un rogue a sa caractéristique criticalDamage de 175% au lieu de 150%


### Pour poursuivre

* Ajouter une fonction levelUp, elle permet de faire une montée de niveau, on augmente le niveau de 1

#### Cependant...

* Un Mage qui levelUp gagne :
  * +1 Strength
  * +1 Agility
  * +6 Intelligence


* Un Warrior qui levelUp gagne :
  * +5 Strength
  * +1 Agility
  * +2 Intelligence


* Un Rogue qui levelUp gagne :
  * +2 Strength
  * +5 Agility
  * +1 Intelligence
  

/!\ Pensez que vos caractéristiques vont changer... Les dégâts aussi !