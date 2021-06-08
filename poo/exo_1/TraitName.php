<?php


trait TraitName
{

    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Playlist|Album|Artist|Song|Style|TraitName|User
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

}