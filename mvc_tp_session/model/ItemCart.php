<?php


class ItemCart
{

    private Item $item;

    private int $quantity;

    /**
     * ItemCart constructor.
     * @param Item $item
     * @param int $quantity
     */
    public function __construct(Item $item, int $quantity)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }


}