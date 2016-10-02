<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblDepartments;
use MainBundle\Form\TblDepartmentsType;

/**
 * TblDepartments controller.
 *
 */
class TblDepartmentsController extends Controller
{
    /**
     * Lists all TblDepartments entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblDepartments = $em->getRepository('MainBundle:TblDepartments')->findAll();

        return $this->render('MainBundle:tbldepartments:index.html.twig', array(
            'tblDepartments' => $tblDepartments,
        ));
    }

    /**
     * Creates a new TblDepartments entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblDepartment = new TblDepartments();
        $form = $this->createForm('MainBundle\Form\TblDepartmentsType', $tblDepartment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblDepartment);
            $em->flush();

            return $this->redirectToRoute('depts_admin_show', array('id' => $tblDepartment->getId()));
        }

        return $this->render('MainBundle:tbldepartments:new.html.twig', array(
            'tblDepartment' => $tblDepartment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblDepartments entity.
     *
     */
    public function showAction(TblDepartments $tblDepartment)
    {
        $deleteForm = $this->createDeleteForm($tblDepartment);

        return $this->render('MainBundle:tbldepartments:show.html.twig', array(
            'tblDepartment' => $tblDepartment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblDepartments entity.
     *
     */
    public function editAction(Request $request, TblDepartments $tblDepartment)
    {
        $deleteForm = $this->createDeleteForm($tblDepartment);
        $editForm = $this->createForm('MainBundle\Form\TblDepartmentsType', $tblDepartment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblDepartment);
            $em->flush();

            return $this->redirectToRoute('depts_admin_edit', array('id' => $tblDepartment->getId()));
        }

        return $this->render('MainBundle:tbldepartments:edit.html.twig', array(
            'tblDepartment' => $tblDepartment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblDepartments entity.
     *
     */
    public function deleteAction(Request $request, TblDepartments $tblDepartment)
    {
        $form = $this->createDeleteForm($tblDepartment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblDepartment);
            $em->flush();
        }

        return $this->redirectToRoute('depts_admin_index');
    }

    /**
     * Creates a form to delete a TblDepartments entity.
     *
     * @param TblDepartments $tblDepartment The TblDepartments entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblDepartments $tblDepartment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('depts_admin_delete', array('id' => $tblDepartment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
