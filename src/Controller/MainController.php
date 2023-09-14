<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'app_')]
class MainController extends AbstractController{

    #[Route('/', name: 'home')]
    public function home(){
        return $this->render('home/index.html.twig');
    }

    #[Route('/menu', name: 'menu')]
    public function menu(){
        return $this->render('menu/index.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(){
        return $this->render('contact/index.html.twig');
    }
}