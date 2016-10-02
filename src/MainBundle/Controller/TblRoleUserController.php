<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblRoleUser;
use MainBundle\Form\TblRoleUserType;

/**
 * TblRoleUser controller.
 *
 */
class TblRoleUserController extends Controller
{
    /**
     * Lists all TblRoleUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblRoleUsers = $em->getRepository('MainBundle:TblRoleUser')->findAll();

        return $this->render('MainBundle:tblroleuser:index.html.twig', array(
            'tblRoleUsers' => $tblRoleUsers,
        ));
    }

    /**
     * Creates a new TblRoleUser entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblRoleUser = new TblRoleUser();
        $form = $this->createForm('MainBundle\Form\TblRoleUserType', $tblRoleUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblRoleUser);
            $em->flush();

            return $this->redirectToRoute('role_user_admin_show', array('id' => $tblRoleUser->getId()));
        }

        return $this->render('MainBundle:tblroleuser:new.html.twig', array(
            'tblRoleUser' => $tblRoleUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblRoleUser entity.
     *
     */
    public function showAction(TblRoleUser $tblRoleUser)
    {
        $deleteForm = $this->createDeleteForm($tblRoleUser);

        return $this->render('MainBundle:tblroleuser:show.html.twig', array(
            'tblRoleUser' => $tblRoleUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblRoleUser entity.
     *
     */
    public function editAction(Request $request, TblRoleUser $tblRoleUser)
    {
        $deleteForm = $this->createDeleteForm($tblRoleUser);
        $editForm = $this->createForm('MainBundle\Form\TblRoleUserType', $tblRoleUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblRoleUser);
            $em->flush();

            return $this->redirectToRoute('role_user_admin_edit', array('id' => $tblRoleUser->getId()));
        }

        return $this->render('MainBundle:tblroleuser:edit.html.twig', array(
            'tblRoleUser' => $tblRoleUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblRoleUser entity.
     *
     */
    public function deleteAction(Request $request, TblRoleUser $tblRoleUser)
    {
        $form = $this->createDeleteForm($tblRoleUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblRoleUser);
            $em->flush();
        }

        return $this->redirectToRoute('role_user_admin_index');
    }

    /**
     * Creates a form to delete a TblRoleUser entity.
     *
     * @param TblRoleUser $tblRoleUser The TblRoleUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblRoleUser $tblRoleUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('role_user_admin_delete', array('id' => $tblRoleUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
