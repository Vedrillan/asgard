<?php

namespace Asgard\Bundle\PlannerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Asgard\Bundle\PlannerBundle\Entity\Mode;
use Asgard\Bundle\PlannerBundle\Form\ModeType;

/**
 * Mode controller.
 *
 */
class ModeController extends Controller
{
    /**
     * Lists all Mode entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AsgardPlannerBundle:Mode')->findAll();

        return $this->render('AsgardPlannerBundle:Mode:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Mode entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Mode')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mode entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Mode:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Mode entity.
     *
     */
    public function newAction()
    {
        $entity = new Mode();
        $form   = $this->createForm(new ModeType(), $entity);

        return $this->render('AsgardPlannerBundle:Mode:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Mode entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Mode();
        $form = $this->createForm(new ModeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_mode_show', array('id' => $entity->getId())));
        }

        return $this->render('AsgardPlannerBundle:Mode:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mode entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Mode')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mode entity.');
        }

        $editForm = $this->createForm(new ModeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AsgardPlannerBundle:Mode:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Mode entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AsgardPlannerBundle:Mode')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mode entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ModeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_mode_edit', array('id' => $id)));
        }

        return $this->render('AsgardPlannerBundle:Mode:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mode entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AsgardPlannerBundle:Mode')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mode entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_mode'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
