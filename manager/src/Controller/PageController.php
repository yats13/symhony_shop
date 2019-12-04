<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('page/page.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
