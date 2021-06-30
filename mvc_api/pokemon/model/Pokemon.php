<?php

class Pokemon
{

    private string $name;
    private string $logoSprites;
    private string $logoArtwork;
    private string $order;
    private array $types;
    private array $stats;
    private array $abilities;
    private int $id;

    /**
     *Pokemon constructor
     * @param int $id
     * @param string $name
     * @param string $logoSprites
     * @param string $logoArtwork
     * @param string $order
     * @param array $type
     * @param array $stats
     * @param array $abilities
     */
    public function __construct(
        int $id, string $name, string $logoSprites, string $logoArtwork, string $order, array $type, array $stats,array $abilities
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->logoSprites = $logoSprites;
        $this ->logoArtwork = $logoArtwork;
        $this->order = $order;
        $this->types = $type;
        $this->stats = $stats;
        $this->abilities = $abilities;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @return array
     */
    public function getAbilities(): array
    {
        return $this->abilities;
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
    public function getLogoSprites(): string
    {
        return $this->logoSprites;
    }

    /**
     * @return string
     */
    public function getLogoArtwork(): string
    {
        return $this->logoArtwork;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        return $this->types;
    }

}
