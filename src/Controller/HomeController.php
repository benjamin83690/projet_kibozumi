<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Repository\CreditRepository;
use Symfony\Component\HttpFoundation\Response;
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
    * @Route("/credit/{id<\d+>}", name="home_credit", methods={"GET"})
    */
    public function credit(Credit $credit, CreditRepository $credits)
    {
        return $this->render('home/credit.html.twig', [
            'credit' => $credit,
            'credits' => $credits->findAll()
        ]);
    }

    public function menu(CreditRepository $credit)
    {
        return $this->render('home/menu.html.twig', [
            'credits' => $credit->findAll(),
        ]);
    }
}
