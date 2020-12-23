<?php


namespace App\Entity\Tank;


class HeavyTank extends Tank
{
    public function __construct()
    {
        $this->setName('HeavyTank');
        $this->setPower(50);
        $this->setHitPoints(50);
        $this->setHitChance(25 );
    }

}