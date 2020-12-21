<?php


namespace App\Entity\Tank;


class LightTank extends Tank
{
    public function __construct()
    {
        $this->setName('LightTank');
        $this->setDamage(10);
        $this->setHitPoints(10);
        $this->setHitChance(mt_rand(100,100));
    }
}