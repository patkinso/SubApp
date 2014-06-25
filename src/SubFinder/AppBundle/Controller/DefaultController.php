<?php

namespace SubFinder\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SubFinderAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
