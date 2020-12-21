<?php


namespace App\Entity\Army;

use App\Entity\Tank\HeavyTank;
use App\Entity\Tank\LightTank;
use App\Entity\Tank\MediumTank;

class GermanArmy extends Army
{
    public function __construct()
    {
        parent::__construct();
        $this->setName('German Army');
    }

    function makeNewArmy(int $number): array
    {
        for ($i = 0; $i < $number; $i++) {
            $this->tanks[] = $this->getRandomArmyTanks();
        }
        return $this->tanks;
    }

    private function getRandomArmyTanks()
    {
        switch (rand(0, 2)) {
            case 0:
                $unit = new LightTank();
                break;

            case 1:
                $unit = new MediumTank();
                break;

            case 2:
                $unit = new HeavyTank();
                break;

            default:
                throw new \Exception('Unsuported Number');
                break;
        }
        return $unit;
    }
}