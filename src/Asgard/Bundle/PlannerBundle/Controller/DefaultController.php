<?php

namespace Asgard\Bundle\PlannerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AsgardPlannerBundle:Default:index.html.twig', array('name' => $name));
    }
}
