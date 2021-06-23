<?php


class ItemsRepository
{
    private array $items;

    /**
     * ItemsRepository constructor.
     */
    public function __construct()
    {
        $this->items[] = new Item(
            'Playstation 5',
            'https://img.huffingtonpost.com/asset/5e1497cf25000079bad32088.png?cache=emHPeyu9Xx&ops=scalefit_630_noupscale',
            500
        );
    }

    public function findAllItems(): array {
        return $this->items;
    }

}