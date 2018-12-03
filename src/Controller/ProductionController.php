<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 16.11.18
 * Time: 12:26
 */

namespace App\Controller;

use App\Entity\ADR;
use App\Entity\SMB;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductionController extends AbstractController
{
    /**
     * @Route("/productionADR",name="productionADR")
     */
    public function productionADR()
    {
        $repoADR=$this->getDoctrine()->getRepository(ADR::class);

        $homeADR=$repoADR->findAll();
        return $this->render('front/productionADR.html.twig',[
            'dataADR' => $homeADR]);
    }

    /**
     * @Route("/productionSMB",name="productionSMB")
     */
    public function productionSMB()
    {
        $repoSMB=$this->getDoctrine()->getRepository(SMB::class);

        $homeSMB=$repoSMB->findAll();
        return $this->render('front/productionSMB.html.twig',[
            'dataSMB' => $homeSMB]);
    }
}