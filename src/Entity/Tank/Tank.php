<?php


namespace App\Entity\Tank;


class Tank
{
    private $name;
    private $damage;
    private $hitPoints;
    private $hitChance;

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
    public function setHitChance($hitChance)
    {
        $this->hitChance = $hitChance;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param integer $damage
     */
    public function setDamage(int $damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return integer
     */
    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    /**
     * @param integer $hitPoints
     */
    public function setHitPoints(int $hitPoints)
    {
        $this->hitPoints = $hitPoints;
    }

    public function missChance($hitChance)
    {
        if (mt_rand(0,100)<=$hitChance){}
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