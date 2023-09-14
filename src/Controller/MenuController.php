<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MenuRepository;

class MenuController extends AbstractController{

    #[Route('/menu',name:'app_menu')]
    public function index(MenuRepository $menuRepository){

        $menus = $menuRepository->findAll();
        //dd($menus);

        return $this->render('menu/index.html.twig', ['menus' => $menus]);

    }
}