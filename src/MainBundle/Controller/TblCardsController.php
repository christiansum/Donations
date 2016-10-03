<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblCards;
use MainBundle\Form\TblCardsType;

/**
 * TblCards controller.
 *
 */
class TblCardsController extends Controller
{
    /**
     * Lists all TblCards entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblCards = $em->getRepository('MainBundle:TblCards')->findAll();

        return $this->render('MainBundle:tblcards:index.html.twig', array(
            'tblCards' => $tblCards,
        ));
    }

    /**
     * Creates a new TblCards entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblCard = new TblCards();
        $form = $this->createForm('MainBundle\Form\TblCardsType', $tblCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tblCard->setCreatedBy($this->getUser());
            $tblCard->setCreatedDt(new \DateTime());
            $tblCard->setIdUser($this->getUser());
            $tblCard->setActive(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblCard);
            $em->flush();

            return $this->redirectToRoute('cards_show', array('id' => $tblCard->getIdCard()));
        }

        return $this->render('MainBundle:tblcards:new.html.twig', array(
            'tblCard' => $tblCard,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblCards entity.
     *
     */
    public function showAction(TblCards $tblCard)
    {
        $deleteForm = $this->createDeleteForm($tblCard);

        return $this->render('MainBundle:tblcards:show.html.twig', array(
            'tblCard' => $tblCard,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblCards entity.
     *
     */
    public function editAction(Request $request, TblCards $tblCard)
    {
        $deleteForm = $this->createDeleteForm($tblCard);
        $editForm = $this->createForm('MainBundle\Form\TblCardsType', $tblCard);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $tblCard->setModifiedBy($this->getUser());
            $tblCard->setModifiedDt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblCard);
            $em->flush();

            return $this->redirectToRoute('cards_edit', array('id' => $tblCard->getIdCard()));
        }

        return $this->render('MainBundle:tblcards:edit.html.twig', array(
            'tblCard' => $tblCard,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblCards entity.
     *
     */
    public function deleteAction(Request $request, TblCards $tblCard)
    {
        $tblCard->setModifiedBy($this->getUser());
        $tblCard->setModifiedDt(new \DateTime());
        $tblCard->setActive(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($tblCard);
        $em->flush();

        return $this->redirectToRoute('cards_index');
    }

    /**
     * Creates a form to delete a TblCards entity.
     *
     * @param TblCards $tblCard The TblCards entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblCards $tblCard)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cards_delete', array('id' => $tblCard->getIdCard())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
