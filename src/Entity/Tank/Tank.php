<?php


namespace App\Entity\Tank;



class Tank
{
    private $name;
    private $power;
    private $hitPoints;
    private $hitChance;
    private $damage;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power): void
    {
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    /**
     * @param mixed $hitPoints
     */
    public function setHitPoints($hitPoints): void
    {
        $this->hitPoints = $hitPoints;
    }

    /**
     * @return mixed
     */
    public function getHitChance()
    {
        return $this->hitChance;
    }

    /**
     * @param mixed $hitChance
     */
    public function setHitChance($hitChance): void
    {
        $this->hitChance = $hitChance;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage): void
    {
        $this->damage = $damage;
    }

    public function missChance($hitChance)
    {
        if (mt_rand(0, 100) >= $hitChance){
            return $this->hitChance = true;
        } else {
            return $this->hitChance = false;
        }
    }

    public function calculateDamage()
    {
        if($this->hitChance = true) {
            $this->damage = $this->power;
        } else {

            $n = 0;
            $this->damage = $this->power * $n;
        }
    }

    public function attack($hitPoints)
    {
        $result = $hitPoints - $this->damage;
        return $result;
    }

    public function tankBlowUp(): bool
    {
        if ($this->hitPoints > 0){
            return false;
        } else {
            return true;
        }
    }
}