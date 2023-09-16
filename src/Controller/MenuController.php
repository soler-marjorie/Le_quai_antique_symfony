<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MenuRepository;
use App\Repository\FormuleRepository;

class MenuController extends AbstractController{

    #[Route('/menu',name:'app_menu')]
    public function index(MenuRepository $menuRepository, FormuleRepository $formuleRepository){

        $menus = $menuRepository->findAll();
        $formules = $formuleRepository->findAll();
        //dd($menus);
        //dd($formules)

        return $this->render('menu/index.html.twig', 
            [
                'menus' => $menus,
                'formules' => $formules
            ]);

    }

    #[Route('/menu/{id}',name:'app_menu_show')]
    public function show($id, MenuRepository $menuRepository){

        $menu = $menuRepository->findOneBy(['id' => $id]);

        if(is_null($menu)){
            return $this->redirectToRoute('app_menu');
        }

        return $this->render('menu/show.html.twig', ['menu' => $menu]);
    }
}