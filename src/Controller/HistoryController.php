<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 15.11.18
 * Time: 22:05
 */

namespace App\Controller;

use App\Entity\ADR;
use App\Entity\SMB;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoryController extends AbstractController
{
    /**
     * @Route("/historyADR",name="historyADR")
     */
    public function dataADR()
    {
        $repoADR=$this->getDoctrine()->getRepository(ADR::class);

        $homeADR=$repoADR->findAll();
        return $this->render('front/historyADR.html.twig',[
            'dataADR' => $homeADR]);
    }
    /**
     * @Route("/historySMB",name="historySMB")
     */
    public function dataSMB()
    {
        $repoSMB=$this->getDoctrine()->getRepository(SMB::class);

        $homeSMB=$repoSMB->findAll();
        return $this->render('front/historySMB.html.twig',[
            'dataSMB' => $homeSMB]);
    }
}