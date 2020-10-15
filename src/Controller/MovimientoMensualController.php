<?php

namespace App\Controller;

use App\Entity\MovimientoMensual;
use App\Form\MovimientoMensualType;
use App\Repository\MovimientoMensualRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movimientos/mensual")
 */
class MovimientoMensualController extends AbstractController
{
    /**
     * @Route("/", name="movimiento_mensual_index", methods={"GET"})
     */
    public function index(MovimientoMensualRepository $movimientoMensualRepository): Response
    {
        return $this->render('movimiento_mensual/index.html.twig', [
            'movimiento_mensuals' => $movimientoMensualRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="movimiento_mensual_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $movimientoMensual = new MovimientoMensual();
        $form = $this->createForm(MovimientoMensualType::class, $movimientoMensual);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($movimientoMensual);
            $entityManager->flush();

            return $this->redirectToRoute('movimiento_mensual_index');
        }

        return $this->render('movimiento_mensual/new.html.twig', [
            'movimiento_mensual' => $movimientoMensual,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="movimiento_mensual_show", methods={"GET"})
     */
    public function show(MovimientoMensual $movimientoMensual): Response
    {
        return $this->render('movimiento_mensual/show.html.twig', [
            'movimiento_mensual' => $movimientoMensual,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="movimiento_mensual_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MovimientoMensual $movimientoMensual): Response
    {
        $form = $this->createForm(MovimientoMensualType::class, $movimientoMensual);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimiento_mensual_index');
        }

        return $this->render('movimiento_mensual/edit.html.twig', [
            'movimiento_mensual' => $movimientoMensual,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="movimiento_mensual_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MovimientoMensual $movimientoMensual): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movimientoMensual->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($movimientoMensual);
            $entityManager->flush();
        }

        return $this->redirectToRoute('movimiento_mensual_index');
    }
}
