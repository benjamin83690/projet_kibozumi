<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Entity\Commande;
use App\Entity\User;
use App\Repository\CreditRepository;
use App\Repository\UserRepository;
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
    * @Route("/ajax/{id}/{user}", name="ajax", methods={"GET"})
    */
    public function ajax(Request $request, Credit $credit, User $user): Response
    {
        $montant = $request->query->get('montant');
        $mensualites = $request->query->get('mensualites');
        $montantTotal = $request->query->get('montantTotal');
        $data = [
            'montantEmprunte'=> intval($montant),
            'mensualites'=> floatval($mensualites),
            'montantTotal'=> floatval($montantTotal),
        ];
        $commande = new Commande();
        $entityManager = $this->getDoctrine()->getManager();
        $commande->setMontantEmprunte($montant)
                 ->setMontantTotal($montantTotal)
                 ->setMensualites($mensualites)
                 ->setUserCommande($user)
                 ->setCreditCommande($credit)
        ;
        $entityManager->persist($commande);
        $entityManager->flush();
        return $this->json($data);
    }
}
