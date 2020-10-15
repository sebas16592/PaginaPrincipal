<?php

namespace App\Controller;

use App\Entity\Movimiento;
use App\Form\MovimientoType;
use App\Repository\MovimientoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movimiento")
 */
class MovimientoController extends AbstractController
{
    /**
     * @Route("/", name="movimiento_index", methods={"GET"})
     */
    public function index(MovimientoRepository $movimientoRepository): Response
    {
        return $this->render('movimiento/index.html.twig', [
            'movimientos' => $movimientoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="movimiento_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $movimiento = new Movimiento();
        $form = $this->createForm(MovimientoType::class, $movimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($movimiento);
            $entityManager->flush();

            return $this->redirectToRoute('movimiento_index');
        }

        return $this->render('movimiento/new.html.twig', [
            'movimiento' => $movimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="movimiento_show", methods={"GET"})
     */
    public function show(Movimiento $movimiento): Response
    {
        return $this->render('movimiento/show.html.twig', [
            'movimiento' => $movimiento,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="movimiento_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Movimiento $movimiento): Response
    {
        $form = $this->createForm(MovimientoType::class, $movimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimiento_index');
        }

        return $this->render('movimiento/edit.html.twig', [
            'movimiento' => $movimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="movimiento_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Movimiento $movimiento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movimiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($movimiento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('movimiento_index');
    }
}
