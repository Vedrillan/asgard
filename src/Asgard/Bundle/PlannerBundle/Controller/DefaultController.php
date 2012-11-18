<?php

namespace Asgard\Bundle\PlannerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AsgardPlannerBundle:Default:index.html.twig');
    }
}
