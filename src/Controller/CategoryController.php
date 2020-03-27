<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Credit;
use App\Entity\Category;
use App\Entity\Commande;
use App\Form\CategoryType;
use App\Repository\CreditRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="category_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="category_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('category_index');
        }

        return $this->render('category/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_show", methods={"GET", "POST"})
     */
    public function show(Category $category, CreditRepository $credits): Response
    {
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'credits' => $credits->findByCategory($category->getId()),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="category_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_index');
        }

        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="category_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Category $category): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('category_index');
    }

    /**
    * @Route("/ajax/{user}/{id}", name="ajax", methods={"GET"})
    */
    public function ajax(Request $request, User $user, Credit $credit ): Response
    {
        $montant = $request->query->get('montant');
        $mensualites = $request->query->get('mensualites');
        $montantTotal = $request->query->get('montantTotal');
        $creditId = $request->query->get('creditId');
        
        $data = [
            'montantEmprunte'=> intval($montant),
            'mensualites'=> floatval($mensualites),
            'montantTotal'=> floatval($montantTotal),
            'creditId'=> intval($creditId)
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
