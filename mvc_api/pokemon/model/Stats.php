<?php


class Stats
{

    private string $name;
    private int $value;
    private float $percent;
    private string $cssClass;

    public function __construct(string $name, int $value)
    {
        $this->name = $name;
        $this->value = $value;
        $this->percent = $value/200*100;
        if ($this->value <= 50){
            $this->cssClass = "stats-red";
        } elseif ($this->value > 50 && $this->value <= 70){
            $this->cssClass = "stats-orange";
        } elseif($this->value > 70 && $this->value <= 90){
            $this->cssClass = "stats-yellow";
        } elseif($this->value > 90 &&  $this->value <= 120) {
            $this->cssClass ="stats-light-green";
        } elseif($this->value > 120 &&  $this->value < 150) {
            $this->cssClass ="stats-green";
        } else {
            $this->cssClass = "stats-teal";
        }
    }

    /*
 * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }

    /*
 * @return int
    */
    public function getValue(): int
    {
        return $this->value;
    }

    /*
 * @return float
    */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @return string
     */
    public function getCssClass(): string
    {
        return $this->cssClass;
    }

}
