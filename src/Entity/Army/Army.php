<?php


namespace App\Entity\Army;


class Army
{
    private $name;
    public $tanks;

    public function __construct()
    {
    }

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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTanks()
    {
        return $this->tanks;
    }

    /**
     * @param mixed $tanks
     */
    public function setTanks($tanks)
    {
        $this->tanks = $tanks;
    }

    public function getRandomTank()
    {
        return $this->tanks [array_rand($this->tanks)];
    }

    public function countTankNumber($tanks)
    {
        $this->tanks = $tanks;
    }

    public function getRidOfTank($tank)
    {
        $tankIndex = array_search($tank, $this->tanks);
        unset($this->tanks[$tankIndex]);
    }
}
