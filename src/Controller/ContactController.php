<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContactRepository;

class ContactController extends AbstractController{

    #[Route('/contact',name:'app_contact')]
    public function index(ContactRepository $contactRepository){

        $contacts = $contactRepository->findAll();
        //dd($contacts);

        return $this->render('contact/index.html.twig', ['contacts' => $contacts]);
    }

}