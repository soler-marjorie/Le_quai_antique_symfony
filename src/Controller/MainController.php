<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'app_')]
class MainController extends AbstractController{

    #[Route('/', name: 'accueil')]
    public function accueil(){
        return $this->render('main.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(){
        return $this->render('contact.html.twig');
    }
}