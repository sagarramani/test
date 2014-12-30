<?php

namespace AcmecontactusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        
        return $this->render('ContactusBundle:Default:index.html.twig', array('name' => $name));
    }
}
