<?php

namespace AppBundle\Controller\FrontendController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppBundle:Default:index.html.twig', array('name' => $name));
    }
}
