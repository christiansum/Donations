<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblDonations;
use MainBundle\Form\TblDonationsType;

/**
 * TblDonations controller.
 *
 */
class TblDonationsController extends Controller
{
    /**
     * Lists all TblDonations entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblDonations = $em->getRepository('MainBundle:TblDonations')->findAll();

        return $this->render('MainBundle:tbldonations:index.html.twig', array(
            'tblDonations' => $tblDonations,
        ));
    }

    /**
     * Creates a new TblDonations entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblDonation = new TblDonations();
        $form = $this->createForm('MainBundle\Form\TblDonationsType', $tblDonation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblDonation);
            $em->flush();

            return $this->redirectToRoute('donations_show', array('id' => $tblDonation->getIdDon()));
        }

        return $this->render('MainBundle:tbldonations:new.html.twig', array(
            'tblDonation' => $tblDonation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblDonations entity.
     *
     */
    public function showAction(TblDonations $tblDonation)
    {
        $deleteForm = $this->createDeleteForm($tblDonation);

        return $this->render('MainBundle:tbldonations:show.html.twig', array(
            'tblDonation' => $tblDonation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblDonations entity.
     *
     */
    public function editAction(Request $request, TblDonations $tblDonation)
    {
        $deleteForm = $this->createDeleteForm($tblDonation);
        $editForm = $this->createForm('MainBundle\Form\TblDonationsType', $tblDonation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblDonation);
            $em->flush();

            return $this->redirectToRoute('donations_edit', array('id' => $tblDonation->getIdDon()));
        }

        return $this->render('MainBundle:tbldonations:edit.html.twig', array(
            'tblDonation' => $tblDonation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblDonations entity.
     *
     */
    public function deleteAction(Request $request, TblDonations $tblDonation)
    {
        $form = $this->createDeleteForm($tblDonation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblDonation);
            $em->flush();
        }

        return $this->redirectToRoute('donations_index');
    }

    /**
     * Creates a form to delete a TblDonations entity.
     *
     * @param TblDonations $tblDonation The TblDonations entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblDonations $tblDonation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('donations_delete', array('id' => $tblDonation->getIdDon())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
