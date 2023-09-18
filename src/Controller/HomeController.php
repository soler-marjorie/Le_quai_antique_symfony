<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SchedulesRepository;
use App\Repository\HomeRepository;
use App\Entity\Home;
use App\Form\HomeType;




class HomeController extends AbstractController{

    #[Route('/', name:'app_home')]
    public function index(HomeRepository $homeRepository, SchedulesRepository $schedulesRepository){

        $homes = $homeRepository->findAll();
        $schedules = $schedulesRepository->findAll();
        //dd($homes);
        //dd($schedules)

        return $this->render('home/index.html.twig', ['homes' => $homes, 'schedules' => $schedules]);
    }

    #[Route('/home/new', name:'app_home_new')]
    public function new(Request $request, EntityManagerInterface $manager){

        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($home);
            $manager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/new.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/home/{id}', name:'app_home_show')]
    public function show($id, HomeRepository $homeRepository){

        $home = $homeRepository->findOneBy(['id' => $id]);

        if(is_null($home)){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/show.html.twig', ['home' => $home]);
    }
}