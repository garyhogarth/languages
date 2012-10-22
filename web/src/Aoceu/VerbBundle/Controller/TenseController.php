<?php

namespace Aoceu\VerbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Aoceu\VerbBundle\Entity\Tense;
use Aoceu\VerbBundle\Form\TenseType;

/**
 * Tense controller.
 *
 */
class TenseController extends Controller
{
    /**
     * Lists all Tense entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AoceuVerbBundle:Tense')->findAll();

        return $this->render('AoceuVerbBundle:Tense:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Tense entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Tense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tense entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Tense:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Tense entity.
     *
     */
    public function newAction()
    {
        $entity = new Tense();
        $form   = $this->createForm(new TenseType(), $entity);

        return $this->render('AoceuVerbBundle:Tense:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Tense entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Tense();
        $form = $this->createForm(new TenseType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tense_show', array('id' => $entity->getId())));
        }

        return $this->render('AoceuVerbBundle:Tense:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tense entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Tense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tense entity.');
        }

        $editForm = $this->createForm(new TenseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Tense:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tense entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Tense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tense entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TenseType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tense_edit', array('id' => $id)));
        }

        return $this->render('AoceuVerbBundle:Tense:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tense entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AoceuVerbBundle:Tense')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tense entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_tense'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
