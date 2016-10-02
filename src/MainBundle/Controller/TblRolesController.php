<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblRoles;
use MainBundle\Form\TblRolesType;

/**
 * TblRoles controller.
 *
 */
class TblRolesController extends Controller
{
    /**
     * Lists all TblRoles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblRoles = $em->getRepository('MainBundle:TblRoles')->findAll();

        return $this->render('MainBundle:tblroles:index.html.twig', array(
            'tblRoles' => $tblRoles,
        ));
    }

    /**
     * Creates a new TblRoles entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblRole = new TblRoles();
        $form = $this->createForm('MainBundle\Form\TblRolesType', $tblRole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblRole);
            $em->flush();

            return $this->redirectToRoute('roles_admin_show', array('id' => $tblRole->getId()));
        }

        return $this->render('MainBundle:tblroles:new.html.twig', array(
            'tblRole' => $tblRole,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblRoles entity.
     *
     */
    public function showAction(TblRoles $tblRole)
    {
        $deleteForm = $this->createDeleteForm($tblRole);

        return $this->render('MainBundle:tblroles:show.html.twig', array(
            'tblRole' => $tblRole,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblRoles entity.
     *
     */
    public function editAction(Request $request, TblRoles $tblRole)
    {
        $deleteForm = $this->createDeleteForm($tblRole);
        $editForm = $this->createForm('MainBundle\Form\TblRolesType', $tblRole);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblRole);
            $em->flush();

            return $this->redirectToRoute('roles_admin_edit', array('id' => $tblRole->getId()));
        }

        return $this->render('MainBundle:tblroles:edit.html.twig', array(
            'tblRole' => $tblRole,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblRoles entity.
     *
     */
    public function deleteAction(Request $request, TblRoles $tblRole)
    {
        $form = $this->createDeleteForm($tblRole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblRole);
            $em->flush();
        }

        return $this->redirectToRoute('roles_admin_index');
    }

    /**
     * Creates a form to delete a TblRoles entity.
     *
     * @param TblRoles $tblRole The TblRoles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblRoles $tblRole)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('roles_admin_delete', array('id' => $tblRole->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
