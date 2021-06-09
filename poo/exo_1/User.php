<?php


use Cassandra\Date;

class User
{

    use TraitName;

    private string $email;

    private DateTime $birthDate;

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
     * @return DateTime
     */
    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     */
    public function setBirthDate(DateTime $birthDate): void
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

    /**
     * Renvoie l'age de l'utilisateur, à partir de sa date de naissance
     * @return string
     */
    public function getAge(): string
    {
        $age = 'Date de naissance non renseigné';
        // isset : permet de savoir si la variable existe ou est initialisée
        if (isset($this->birthDate)) {
            $currentDate = new DateTime();
            $interval = $currentDate->diff($this->birthDate);
            // $interval est de type DateInterval (voir doc)
            // Grâce à cet objet on peut récupérer les années, les mois, les jours... etc
            return $interval->y;
        }
        return $age;
    }

}