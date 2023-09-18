<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MenuRepository;
use App\Repository\FormuleRepository;
use App\Entity\Menu;
use App\Form\MenuType;

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

    #[Route('/menu/new', name:'app_menu_new')]
    public function new(Request $request, EntityManagerInterface $manager){

        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($menu);
            $manager->flush();

            return $this->redirectToRoute('app_menu');
        }

        return $this->render('menu/new.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/menu/{id}',name:'app_menu_show')]
    public function show($id, MenuRepository $menuRepository, FormuleRepository $formuleRepository){

        $menu = $menuRepository->findOneBy(['id' => $id]);
        $formule = $formuleRepository->findOneBy(['id' => $id]);

        if(is_null($menu)){
            return $this->redirectToRoute('app_menu');
        }

        if(is_null($formule)){
            return $this->redirectToRoute('app_menu');
        }

        return $this->render('menu/show.html.twig', ['menu' => $menu, 'formule' => $formule]);

        var_dump($menu);
    }
}