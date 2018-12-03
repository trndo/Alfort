<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 08.11.18
 * Time: 22:01
 */

namespace App\Controller;

use App\Entity\HomePage;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /**
     * @Route("/{_locale}",name="homePage", requirements={"locale":"'%locales%'"})
     */
    public function dataHP()
    {
        $repoHomePage=$this->getDoctrine()->getRepository(HomePage::class);
        $homePage=$repoHomePage->findAll();
        return $this->render('front/homepage.html.twig',[
            'dataHomePage' => $homePage]);
    }

}