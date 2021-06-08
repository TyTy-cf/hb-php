<?php


class Song
{
    use TraitName;

    private string $duration;

    private float $price;

    /**
     * @var Artist[]
     */
    private array $artists;

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return Artist[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * @param Artist $artist
     */
    public function addArtists(Artist $artist): void
    {
        if (!in_array($artist, $this->artists)) {
            $this->artists[] = $artist;
        }
    }

    public function __toString(): string
    {
        return $this->name . ' (' . $this->duration . ')';
    }

}