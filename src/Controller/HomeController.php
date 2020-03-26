<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\CreditRepository;
use Symfony\Component\HttpFoundation\Request;
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

    /**
    * @Route("/ajax/{id}", name="ajax", methods={"GET"})
    */
    public function ajax(Request $request): Response
    {
        $montant = $request->query->get('montant');
        $mensualites = $request->query->get('mensualites');
        $montantTotal = $request->query->get('montantTotal');
        $creditId = $request->query->get('creditId');
        $userId = $request->query->get('userId');
        $data = [
            'montantEmprunte'=> $montant,
            'mensualites'=>$mensualites,
            'montantTotal'=>$montantTotal,
            'creditId'=>$creditId,
            'userId' => $userId
        ];
        return $this->json($data);
        $commande = new Commande();
        $entityManager = $this->getDoctrine()->getManager();
        $commande->setMontantEmprunte($montant)
                 ->setMontantTotal($montantTotal)
                 ->setMensualites($mensualites)
                 ->setUserCommande($userId)
                 ->setCreditCommande($creditId)
        ;
        $entityManager->persist($commande);
        $entityManager->flush();
    }
}
