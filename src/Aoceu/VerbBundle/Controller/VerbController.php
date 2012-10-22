<?php

namespace Aoceu\VerbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Aoceu\VerbBundle\Entity\Verb;
use Aoceu\VerbBundle\Form\VerbType;

/**
 * Verb controller.
 *
 */
class VerbController extends Controller
{
    /**
     * Lists all Verb entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AoceuVerbBundle:Verb')->findAll();

        return $this->render('AoceuVerbBundle:Verb:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Verb entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Verb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Verb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Verb:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Verb entity.
     *
     */
    public function newAction()
    {
        $entity = new Verb();
        $form   = $this->createForm(new VerbType(), $entity);

        return $this->render('AoceuVerbBundle:Verb:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Verb entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Verb();
        $form = $this->createForm(new VerbType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_verb_show', array('id' => $entity->getId())));
        }

        return $this->render('AoceuVerbBundle:Verb:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Verb entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Verb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Verb entity.');
        }

        $editForm = $this->createForm(new VerbType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Verb:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Verb entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Verb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Verb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new VerbType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_verb_edit', array('id' => $id)));
        }

        return $this->render('AoceuVerbBundle:Verb:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Verb entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AoceuVerbBundle:Verb')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Verb entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_verb'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
