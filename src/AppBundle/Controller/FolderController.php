<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Folder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Folder controller.
 *
 * @Route("folders")
 */
class FolderController extends Controller
{
    /**
     * Lists all folder entities.
     *
     * @Route("/", name="folders_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $folders = $em->getRepository('AppBundle:Folder')->findAll();

        return $this->render('folder/index.html.twig', array(
            'folders' => $folders,
        ));
    }

    /**
     * Creates a new folder entity.
     *
     * @Route("/create", name="folders_create")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request)
    {
        $folder = new Folder();
        $form = $this->createForm('AppBundle\Form\FolderType', $folder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($folder);
            $em->flush();

            return $this->redirectToRoute('folders_show', array('id' => $folder->getId()));
        }

        return $this->render('folder/new.html.twig', array(
            'folder' => $folder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a folder entity.
     *
     * @Route("/{id}", name="folders_show")
     * @Method("GET")
     */
    public function showAction(Folder $folder)
    {
        $deleteForm = $this->createDeleteForm($folder);

        return $this->render('folder/show.html.twig', array(
            'folder' => $folder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing folder entity.
     *
     * @Route("/{id}/edit", name="folders_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Folder $folder)
    {
        $deleteForm = $this->createDeleteForm($folder);
        $editForm = $this->createForm('AppBundle\Form\FolderType', $folder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('folders_edit', array('id' => $folder->getId()));
        }

        return $this->render('folder/edit.html.twig', array(
            'folder' => $folder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a folder entity.
     *
     * @Route("/{id}", name="folders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Folder $folder)
    {
        $form = $this->createDeleteForm($folder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($folder);
            $em->flush();
        }

        return $this->redirectToRoute('folders_index');
    }

    /**
     * Creates a form to delete a folder entity.
     *
     * @param Folder $folder The folder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Folder $folder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('folders_delete', array('id' => $folder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
