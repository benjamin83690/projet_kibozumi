<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Repository\CreditRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CreditRepository $credit)
    {
        return $this->render('home/index.html.twig', [
            'userCredit' => $credit->findAll(),
        ]);
    }

    /**
    * @Route("/credit/{id}", name="credit")
    */
    public function credit(Credit $credit)
    {
        return $this->render('home/credit.html.twig', [
            'credit' => $credit,
        ]);
    }

}
