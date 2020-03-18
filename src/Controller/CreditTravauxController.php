<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditTravauxController extends AbstractController
{
    /**
     * @Route("/credit/travaux", name="credit_travaux")
     */
    public function index()
    {
        return $this->render('credit_travaux/index.html.twig', [
            'controller_name' => 'CreditTravauxController',
        ]);
    }
}
