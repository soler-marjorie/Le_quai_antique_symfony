<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HomeRepository;

class HomeController extends AbstractController{

    #[Route('/',name:'app_home')]
    public function index(HomeRepository $homeRepository){

        $homes = $homeRepository->findAll();
        //dd($homes);

        return $this->render('home/index.html.twig', ['homes' => $homes]);
    }
}