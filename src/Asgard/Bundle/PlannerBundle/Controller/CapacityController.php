<?php

namespace Asgard\Bundle\PlannerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Asgard\Bundle\PlannerBundle\Entity\Capacity;
use Asgard\Bundle\PlannerBundle\Form\CapacityType;

/**
 * Capacity controller.
 *
 */
class CapacityController extends Controller
{
    /**
     * Lists all Capacity entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AsgardPlannerBundle:Capacity')->findAll();

        return $this->render('AsgardPlannerBundle:Capacity:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Capacity entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Capacity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Capacity:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Capacity entity.
     *
     */
    public function newAction()
    {
        $entity = new Capacity();
        $form   = $this->createForm(new CapacityType(), $entity);

        return $this->render('AsgardPlannerBundle:Capacity:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Capacity entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Capacity();
        $form = $this->createForm(new CapacityType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_capacity_show', array('id' => $entity->getId())));
        }

        return $this->render('AsgardPlannerBundle:Capacity:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Capacity entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Capacity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacity entity.');
        }

        $editForm = $this->createForm(new CapacityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Capacity:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Capacity entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Capacity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CapacityType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_capacity_edit', array('id' => $id)));
        }

        return $this->render('AsgardPlannerBundle:Capacity:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Capacity entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AsgardPlannerBundle:Capacity')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Capacity entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_capacity'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
