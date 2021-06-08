<?php


class Album
{

    use TraitName;

    private int $releasedYear;

    private float $price;

    /**
     * @var Song[]
     */
    private array $songs;

    /**
     * @return int
     */
    public function getReleasedYear(): int
    {
        return $this->releasedYear;
    }

    /**
     * @param int $releasedYear
     */
    public function setReleasedYear(int $releasedYear): void
    {
        $this->releasedYear = $releasedYear;
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
     * @return Song[]
     */
    public function getSongs(): array
    {
        return $this->songs;
    }

    /**
     * @param Song $song
     */
    public function addSong(Song $song): void
    {
        if (!in_array($song, $this->songs)) {
            $this->songs[] = $song;
        }
    }

}