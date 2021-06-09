
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

  

