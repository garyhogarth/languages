<?php

namespace Aoceu\VerbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Aoceu\VerbBundle\Entity\Conjugation;
use Aoceu\VerbBundle\Form\ConjugationType;

/**
 * Conjugation controller.
 *
 */
class ConjugationController extends Controller
{
    /**
     * Lists all Conjugation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AoceuVerbBundle:Conjugation')->findAll();

        return $this->render('AoceuVerbBundle:Conjugation:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Conjugation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Conjugation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conjugation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Conjugation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Conjugation entity.
     *
     */
    public function newAction()
    {
        $entity = new Conjugation();
        $form   = $this->createForm(new ConjugationType(), $entity);

        return $this->render('AoceuVerbBundle:Conjugation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Conjugation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Conjugation();
        $form = $this->createForm(new ConjugationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_conjugation_show', array('id' => $entity->getId())));
        }

        return $this->render('AoceuVerbBundle:Conjugation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conjugation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Conjugation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conjugation entity.');
        }

        $editForm = $this->createForm(new ConjugationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AoceuVerbBundle:Conjugation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Conjugation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AoceuVerbBundle:Conjugation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conjugation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ConjugationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_conjugation_edit', array('id' => $id)));
        }

        return $this->render('AoceuVerbBundle:Conjugation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conjugation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AoceuVerbBundle:Conjugation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Conjugation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_conjugation'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
