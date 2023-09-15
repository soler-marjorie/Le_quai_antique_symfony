<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SchedulesRepository;

class SchedulesController extends AbstractController{

    #[Route('/',name:'app_footer')]
    public function index(SchedulesRepository $schedulesRepository){

        $schedule = $schedulesRepository->findAll();
        dd($schedule);

    return $this->render('includes/_footer.html.twig', /*['schedule' => $schedule]*/);
    }
}