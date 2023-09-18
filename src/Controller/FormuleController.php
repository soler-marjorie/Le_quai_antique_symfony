<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Formule;
use App\Form\FormuleType;

class FormuleController extends AbstractController{


    #[Route('/menu/new', name:'app_menu_new')]
    public function new(Request $request){

        $formule = new Formule();
        $form = $this->createForm(FormuleType::class, $formule);
        $form->handleRequest($request);

        return $this->render('menu/new.html.twig', ['form' => $form->createView()]);
    }
}