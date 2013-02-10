<?php

namespace Utils\Bundle\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UtilsFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
