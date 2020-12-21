<?php

namespace App\Controller;

use App\Entity\Army\GermanArmy;
use App\Logic\Battle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class BattleController extends AbstractController
{
    /**
     * @param Request $request
     * @param Battle $battle
     * @return Response
     * @Route/", name="homepage")
     */
    public function index(Request $request, Battle $battle)
    {
        $germanTanksNumber = $request->get('army1');

        $russianTanksNumber = $request->get('army2');

        if (!isset($germanTanksNumber) || !isset($russianTanksNumber)) {
            return $this->render('battle/index.html.twig', [
                'error' => 'Army 1 and 2 must have numbers!',
            ]);
        }

        $germanArmy = new GermanArmy();
        $germanArmy->makeNewArmy($germanTanksNumber);

        $russianArmy = new GermanArmy();
        $russianArmy->makeNewArmy($russianTanksNumber);

        $winner = $battle->battle($germanArmy, $russianArmy);

        return $this->render('battle/index.html.twig', [
            'winner' => $winner,
        ]);
    }
}
