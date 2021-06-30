<?php


class Types
{
    private string $name;
    private string $url;

    public function __construct(string $name, string $url)
    {
        $this->name = ucfirst($name);
        $this->url = $url;
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
    public function getUrl(): string
    {
        return $this->url;
    }

}
