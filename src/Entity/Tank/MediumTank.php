<?php


namespace App\Entity\Tank;


class MediumTank extends Tank
{
    public function __construct()
    {
        $this->setName('MediumTank');
        $this->setDamage(20);
        $this->setHitPoints(20);
        $this->setHitChance(mt_rand(0, 50));
    }
}