<?php


use Cassandra\Date;

class User
{

    use TraitName;

    private string $email;

    private Date $birthDate;

    private DateTime $createdAt;

    private string $password;

    /**
     * @var Playlist[]
     */
    private array $playlists;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return Date
     */
    public function getBirthDate(): Date
    {
        return $this->birthDate;
    }

    /**
     * @param Date $birthDate
     */
    public function setBirthDate(Date $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return Playlist[]
     */
    public function getPlaylists(): array
    {
        return $this->playlists;
    }

    /**
     * @param Playlist $playlist
     */
    public function setPlaylists(Playlist $playlist): void
    {
        if (!in_array($playlist, $this->playlists)) {
            $this->playlists[] = $playlist;
        }
    }

}