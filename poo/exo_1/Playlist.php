<?php


class Playlist
{

    /**
     * Import le trait dans la classe, ainsi la classe bénéficie
     * des attributs du trait
     */
    use TraitName;

    private DateTime $createdAt;

    private DateTime $updatedAt;

    /**
     * @var Song[]
     */
    private array $songs;

    /**
     * Playlist constructor.
     */
    public function __construct()
    {
        // PAr défaut new DateTime vous donne la date du jour
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function setName(string $name): void
    {
        $this->name = $name;
        $this->updatedAt = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
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
            $this->updatedAt = new DateTime();
        }
    }

}