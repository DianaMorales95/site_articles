<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends AbstractController
{
    
    /*public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }*/


    /**
     * @Route("/index", name="index" )
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('index/index.html.twig', [
        
            'articles' => $articleRepository->findAll(),
        ]);
    }

      /**
     * @Route("/{id}", name="comment", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('comment/index.html.twig', [
             'article' => $article,
        ]);
    }
}
