<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblCountries;
use MainBundle\Form\TblCountriesType;

/**
 * TblCountries controller.
 *
 */
class TblCountriesController extends Controller
{
    /**
     * Lists all TblCountries entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblCountries = $em->getRepository('MainBundle:TblCountries')->findAll();

        return $this->render('MainBundle:tblcountries:index.html.twig', array(
            'tblCountries' => $tblCountries,
        ));
    }

    /**
     * Creates a new TblCountries entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblCountry = new TblCountries();
        $form = $this->createForm('MainBundle\Form\TblCountriesType', $tblCountry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblCountry);
            $em->flush();

            return $this->redirectToRoute('countries_admin_show', array('id' => $tblCountry->getId()));
        }

        return $this->render('MainBundle:tblcountries:new.html.twig', array(
            'tblCountry' => $tblCountry,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblCountries entity.
     *
     */
    public function showAction(TblCountries $tblCountry)
    {
        $deleteForm = $this->createDeleteForm($tblCountry);

        return $this->render('MainBundle:tblcountries:show.html.twig', array(
            'tblCountry' => $tblCountry,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblCountries entity.
     *
     */
    public function editAction(Request $request, TblCountries $tblCountry)
    {
        $deleteForm = $this->createDeleteForm($tblCountry);
        $editForm = $this->createForm('MainBundle\Form\TblCountriesType', $tblCountry);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblCountry);
            $em->flush();

            return $this->redirectToRoute('countries_admin_edit', array('id' => $tblCountry->getId()));
        }

        return $this->render('MainBundle:tblcountries:edit.html.twig', array(
            'tblCountry' => $tblCountry,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblCountries entity.
     *
     */
    public function deleteAction(Request $request, TblCountries $tblCountry)
    {
        $form = $this->createDeleteForm($tblCountry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblCountry);
            $em->flush();
        }

        return $this->redirectToRoute('countries_admin_index');
    }

    /**
     * Creates a form to delete a TblCountries entity.
     *
     * @param TblCountries $tblCountry The TblCountries entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblCountries $tblCountry)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('countries_admin_delete', array('id' => $tblCountry->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
