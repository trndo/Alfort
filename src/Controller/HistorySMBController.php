<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 15.11.18
 * Time: 22:59
 */

namespace App\Controller;

use App\Entity\SMB;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistorySMBController extends AbstractController
{
    /**
     * @Route("/historySMB",name="historySMB")
     */
    public function index()
    {
        $repoSMB=$this->getDoctrine()->getRepository(SMB::class);

        $homeSMB=$repoSMB->findAll();
        return $this->render('front/historySMB.html.twig',[
            'dataSMB' => $homeSMB]);
    }

}