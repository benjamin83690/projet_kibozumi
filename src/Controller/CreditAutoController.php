<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditAutoController extends AbstractController
{
    /**
     * @Route("/credit/auto", name="credit_auto")
     */
    public function index()
    {
        return $this->render('credit_auto/index.html.twig', [
            'controller_name' => 'CreditAutoController',
        ]);
    }
}
