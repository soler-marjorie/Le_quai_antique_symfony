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

    #[Route('/{id}',name:'app_home_show')]
    public function show($id, HomeRepository $homeRepository){

        $home = $homeRepository->findOneBy(['id' => $id]);

        if(is_null($home)){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/show.html.twig', ['home' => $home]);
    }
}