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
     * Album constructor.
     */
    public function __construct()
    {
        $this->songs = [];
    }

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

    public function getAlbumDuration(): string
    {
        $totalDuration = 0;
        foreach ($this->songs as $song) {
            $totalDuration += $song->getIntDuration();
        }
        $seconds = $totalDuration % 60;
        $minutes = floor($totalDuration / 60);
        $minutes = $minutes % 60;
        $hours = floor($minutes / 60);
        $hours = $hours % 60;
        if ($minutes < 10) {
            $minutes = '0' . $minutes;
        }
        if ($hours < 10) {
            $hours = '0' . $hours;
        }
        if ($seconds < 10) {
            $seconds = '0' . $seconds;
        }
        return $hours . ':' . $minutes. ':' . $seconds;
    }

}