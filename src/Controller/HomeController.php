<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Repository\CreditRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

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
    public function credit(Credit $credit)
    {
        return $this->render('home/credit.html.twig', [
            'credit' => $credit,
        ]);
    }

    public function menu(CreditRepository $credit)
    {
        return $this->render('home/menu.html.twig', [
            'credits' => $credit->findAll(),
        ]);
    }

    /**
    * @Route("/ajax/{id}", name="ajax", methods={"GET"})
    */
    public function ajax(Request $request, Credit $credit)
    {
        $montant = $request->query->get('montant');
        $data = ['montantEmprunte'=> $montant];
        $data['mensualites'] = $credit->getNewMensualites($montant);
        $data['montantTotal'] = $credit->getNewMontantTotal($montant);
        return $this->json($data);
    }
}
