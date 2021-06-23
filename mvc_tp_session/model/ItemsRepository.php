<?php

include_once 'Item.php';

/**
 * Class ItemsRepository : c'est lui qui normalement fait le lien avec la database
 */
class ItemsRepository
{
    private array $items;

    /**
     * ItemsRepository constructor.
     */
    public function __construct()
    {
        // Normalement : connexion avec la database
        $this->items[] = new Item(
            'Playstation 5',
            'https://img.huffingtonpost.com/asset/5e1497cf25000079bad32088.png?cache=emHPeyu9Xx&ops=scalefit_630_noupscale',
            500
        );
        $this->items[] = new Item(
            'Xbouze Serie X',
            'https://www.sitegeek.fr/wp-content/uploads/2020/10/xbox-series-x-logo.jpg',
            500
        );
        $this->items[] = new Item(
            'Childtendo Switch',
            'https://blog.chipnmodz.fr/wp-content/uploads/2012/12/logo-nintendo-switch.png',
            300
        );
    }

    /**
     * SELECT * FROM item;
     * @return Item[]
     */
    public function findAllItems(): array {
        return $this->items;
    }

    /**
     * SELECT * FROM item WHERE item.id = :id
     * @param int $id
     * @return Item|null
     */
    public function findItemById(int $id): ?Item {
        foreach($this->items as $item) {
            /** @var Item $item */
            if ($item->getId() == $id) {
                return $item;
            }
        }
        return null;
    }

}