<?php
/**
 * Created by PhpStorm.
 * User: vel-vet
 * Date: 19.11.18
 * Time: 23:55
 */

namespace App\Controller;

use App\Entity\Useful;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsefulController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function article()
    {
        $repoUseful=$this->getDoctrine()->getRepository(Useful::class);
        $articles=$repoUseful->findAll();

        return $this->render('front/articles.html.twig',[
            'articles' => $articles]);
    }

    /**
     * @Route("/articles/{id}", name="article")
     */
    public function showArticle($id)
    {
        $repoUseful=$this->getDoctrine()->getRepository(Useful::class);
        $articlesData=$repoUseful->findBy(['id'=> $id]);

        return $this->render('front/articlesData.html.twig',[
            'articles' => $articlesData]);
    }

}