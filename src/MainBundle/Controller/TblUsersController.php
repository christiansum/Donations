<?php

namespace MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MainBundle\Entity\TblUsers;
use MainBundle\Form\TblUsersType;

/**
 * TblUsers controller.
 *
 */
class TblUsersController extends Controller
{
    /**
     * Lists all TblUsers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tblUsers = $em->getRepository('MainBundle:TblUsers')->findAll();

        return $this->render('tblusers/index.html.twig', array(
            'tblUsers' => $tblUsers,
        ));
    }

    /**
     * Creates a new TblUsers entity.
     *
     */
    public function newAction(Request $request)
    {
        $tblUser = new TblUsers();
        $form = $this->createForm('MainBundle\Form\TblUsersType', $tblUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblUser);
            $em->flush();

            return $this->redirectToRoute('users_show', array('id' => $tblUser->getId()));
        }

        return $this->render('tblusers/new.html.twig', array(
            'tblUser' => $tblUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TblUsers entity.
     *
     */
    public function showAction(TblUsers $tblUser)
    {
        $deleteForm = $this->createDeleteForm($tblUser);

        return $this->render('tblusers/show.html.twig', array(
            'tblUser' => $tblUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TblUsers entity.
     *
     */
    public function editAction(Request $request, TblUsers $tblUser)
    {
        $deleteForm = $this->createDeleteForm($tblUser);
        $editForm = $this->createForm('MainBundle\Form\TblUsersType', $tblUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblUser);
            $em->flush();

            return $this->redirectToRoute('users_edit', array('id' => $tblUser->getId()));
        }

        return $this->render('tblusers/edit.html.twig', array(
            'tblUser' => $tblUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TblUsers entity.
     *
     */
    public function deleteAction(Request $request, TblUsers $tblUser)
    {
        $form = $this->createDeleteForm($tblUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tblUser);
            $em->flush();
        }

        return $this->redirectToRoute('users_index');
    }

    /**
     * Creates a form to delete a TblUsers entity.
     *
     * @param TblUsers $tblUser The TblUsers entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TblUsers $tblUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('users_delete', array('id' => $tblUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
