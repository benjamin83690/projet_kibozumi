<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Credit;
<<<<<<< Updated upstream
use App\Repository\CreditRepository;
=======
use App\Entity\Commande;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
>>>>>>> Stashed changes
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoryRepository $category)
    {
        return $this->render('home/index.html.twig', [
            'categories' => $category->findAll(),
        ]);
    }

    // /**
    // * @Route("/credit/{id<\d+>}", name="home_credit", methods={"GET"})
    // */
    // public function credit(Credit $credit, CreditRepository $credits)
    // {
    //     return $this->render('home/credit.html.twig', [
    //         'credit' => $credit,
    //         'credits' => $credits->findAll()
    //     ]);
    // }

    public function menu(CategoryRepository $category)
    {
        return $this->render('home/menu.html.twig', [
            'categories' => $category->findAll(),
        ]);
    }
}
