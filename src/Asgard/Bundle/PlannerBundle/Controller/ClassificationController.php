<?php

namespace Asgard\Bundle\PlannerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Asgard\Bundle\PlannerBundle\Entity\Classification;
use Asgard\Bundle\PlannerBundle\Form\ClassificationType;

/**
 * Classification controller.
 *
 */
class ClassificationController extends Controller
{
    /**
     * Lists all Classification entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AsgardPlannerBundle:Classification')->findAll();

        return $this->render('AsgardPlannerBundle:Classification:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Classification entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Classification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Classification:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Classification entity.
     *
     */
    public function newAction()
    {
        $entity = new Classification();
        $form   = $this->createForm(new ClassificationType(), $entity);

        return $this->render('AsgardPlannerBundle:Classification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Classification entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Classification();
        $form = $this->createForm(new ClassificationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_classification_show', array('id' => $entity->getId())));
        }

        return $this->render('AsgardPlannerBundle:Classification:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Classification entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Classification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classification entity.');
        }

        $editForm = $this->createForm(new ClassificationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Classification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Classification entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Classification')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classification entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ClassificationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_classification_edit', array('id' => $id)));
        }

        return $this->render('AsgardPlannerBundle:Classification:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Classification entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AsgardPlannerBundle:Classification')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Classification entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_classification'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
