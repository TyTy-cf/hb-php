<?php


class Item
{
    private static int $staticId = 1;

    private int $id;

    private string $name;

    private string $logo;

    private float $prince;

    /**
     * Item constructor.
     * @param string $name
     * @param string $logo
     * @param float $prince
     */
    public function __construct(string $name, string $logo, float $prince)
    {
        $this->id = self::$staticId;
        self::$staticId++;
        $this->name = $name;
        $this->logo = $logo;
        $this->prince = $prince;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @return float
     */
    public function getPrince(): float
    {
        return $this->prince;
    }

}