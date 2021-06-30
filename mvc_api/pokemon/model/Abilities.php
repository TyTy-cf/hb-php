<?php


class Abilities
{
    private string $name;
    private bool $isHidden;
    private string $description;

    public function __construct(string $name, bool $isHidden, string $description)
    {
        $this->name = $name;
        $this->isHidden = $isHidden;
        $this->description = $description;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }

}
