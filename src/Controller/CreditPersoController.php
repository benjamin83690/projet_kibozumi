<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditPersoController extends AbstractController
{
    /**
     * @Route("/credit/perso", name="credit_perso")
     */
    public function index()
    {
        return $this->render('credit_perso/index.html.twig', [
            'controller_name' => 'CreditPersoController',
        ]);
    }
}
