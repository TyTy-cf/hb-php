<?php


class Pokemon
{
    private string $name;
    private string $logo;
    private string $bigImage;
    private string $number;
    private array $types;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $logo
     * @param string $bigImage
     * @param string $number
     * @param array $types
     */
    public function __construct(string $name, string $logo, string $bigImage, string $number, array $types)
    {
        $this->name = $name;
        $this->logo = $logo;
        $this->bigImage = $bigImage;
        $this->number = $number;
        $this->types = $types;
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
     * @return string
     */
    public function getBigImage(): string
    {
        return $this->bigImage;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

}