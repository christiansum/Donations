<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblInstitutions;
use MainBundle\Form\TblInstitutionsType;

/**
 * TblInstitutions controller.
 * ErpPlanillasBundle:AvisosAlta:listado.html.twig
 */
class TblInstitutionsController extends Controller
{
    /**
     * Lists all TblInstitutions entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblInstitutions = $em->getRepository('MainBundle:TblInstitutions')->findAll();

        return $this->render('MainBundle:tblinstitutions:index.html.twig', array(
            'tblInstitutions' => $tblInstitutions,
        ));
    }

    /**
     * Creates a new TblInstitutions entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblInstitution = new TblInstitutions();
        $form = $this->createForm('MainBundle\Form\TblInstitutionsType', $tblInstitution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tblInstitution->setCreatedBy($this->getUser());
            $tblInstitution->setCreatedDt(new \DateTime());
            $tblInstitution->setActive(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblInstitution);
            $em->flush();

            return $this->redirectToRoute('institutions_show', array('id' => $tblInstitution->getIdIns()));
        }

        return $this->render('MainBundle:tblinstitutions:new.html.twig', array(
            'tblInstitution' => $tblInstitution,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblInstitutions entity.
     *
     */
    public function showAction(TblInstitutions $tblInstitution)
    {
        $deleteForm = $this->createDeleteForm($tblInstitution);

        return $this->render('MainBundle:tblinstitutions:show.html.twig', array(
            'tblInstitution' => $tblInstitution,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblInstitutions entity.
     *
     */
    public function editAction(Request $request, TblInstitutions $tblInstitution)
    {
        $deleteForm = $this->createDeleteForm($tblInstitution);
        $editForm = $this->createForm('MainBundle\Form\TblInstitutionsType', $tblInstitution);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $tblInstitution->setModifiedBy($this->getUser());
            $tblInstitution->setModifiedDt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblInstitution);
            $em->flush();

            return $this->redirectToRoute('institutions_edit', array('id' => $tblInstitution->getIdIns()));
        }

        return $this->render('MainBundle:tblinstitutions:edit.html.twig', array(
            'tblInstitution' => $tblInstitution,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblInstitutions entity.
     *
     */
    public function deleteAction(Request $request, TblInstitutions $tblInstitution)
    {

            $tblInstitution->setModifiedBy($this->getUser());
            $tblInstitution->setModifiedDt(new \DateTime());
            $tblInstitution->setActive(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblInstitution);
            $em->flush();

        return $this->redirectToRoute('institutions_index');
    }

    /**
     * Creates a form to delete a TblInstitutions entity.
     *
     * @param TblInstitutions $tblInstitution The TblInstitutions entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblInstitutions $tblInstitution)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('institutions_delete', array('id' => $tblInstitution->getIdIns())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
