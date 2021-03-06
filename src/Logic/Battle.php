<?php


namespace App\Logic;


class Battle
{
    public function battle($germanArmy, $russianArmy)
    {

        while ($germanArmy->isAlive() && $russianArmy->isAlive()) {
            $germanTank = $germanArmy->getRandomTank();
            $russianTank = $russianArmy->getRandomTank();

            $germanTank->setHitPoints(($russianTank->attack($germanTank->getHitPoints())));
            $russianTank->setHitPoints($germanTank->attack($russianTank->getHitPoints()));

            if ($germanTank->tankBlowUp()) {
                $germanArmy->getRidofTank($germanTank);
            }

            if ($russianTank->tankBlowUp()) {
                $russianArmy->getRidofTank($russianTank);
            }

        }
        return $this->checkForAWinner($germanArmy, $russianArmy);
    }

    public function checkForAWinner($germanArmy, $russianArmy)
    {
        if (count($germanArmy->tanks) == 0) {
            return 'Russian Army';
        } else if (count($russianArmy->tanks)== 0) {
            return 'German Army';
        }
    }

}
