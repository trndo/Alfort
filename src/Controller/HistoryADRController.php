<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 15.11.18
 * Time: 22:05
 */

namespace App\Controller;

use App\Entity\ADR;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoryADRController extends AbstractController
{
    /**
     * @Route("/historyADR",name="historyADR")
     */
    public function index()
    {
        $repoADR=$this->getDoctrine()->getRepository(ADR::class);

        $homeADR=$repoADR->findAll();
        return $this->render('front/historyADR.html.twig',[
            'dataADR' => $homeADR]);
    }

}