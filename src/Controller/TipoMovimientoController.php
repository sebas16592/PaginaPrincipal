<?php

namespace App\Controller;

use App\Entity\TipoMovimiento;
use App\Form\TipoMovimientoType;
use App\Repository\TipoMovimientoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/movimiento")
 */
class TipoMovimientoController extends AbstractController
{
    /**
     * @Route("/", name="tipo_movimiento_index", methods={"GET"})
     */
    public function index(TipoMovimientoRepository $tipoMovimientoRepository): Response
    {
        return $this->render('tipo_movimiento/index.html.twig', [
            'tipo_movimientos' => $tipoMovimientoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tipo_movimiento_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tipoMovimiento = new TipoMovimiento();
        $form = $this->createForm(TipoMovimientoType::class, $tipoMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipoMovimiento);
            $entityManager->flush();

            return $this->redirectToRoute('tipo_movimiento_index');
        }

        return $this->render('tipo_movimiento/new.html.twig', [
            'tipo_movimiento' => $tipoMovimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_movimiento_show", methods={"GET"})
     */
    public function show(TipoMovimiento $tipoMovimiento): Response
    {
        return $this->render('tipo_movimiento/show.html.twig', [
            'tipo_movimiento' => $tipoMovimiento,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_movimiento_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TipoMovimiento $tipoMovimiento): Response
    {
        $form = $this->createForm(TipoMovimientoType::class, $tipoMovimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_movimiento_index');
        }

        return $this->render('tipo_movimiento/edit.html.twig', [
            'tipo_movimiento' => $tipoMovimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_movimiento_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TipoMovimiento $tipoMovimiento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoMovimiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tipoMovimiento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tipo_movimiento_index');
    }
}
