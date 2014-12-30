<?php

namespace AcmeRegisterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        echo "call";exit;
        return $this->render('RegisterBundle:Default:index.html.twig', array('name' => $name));
    }
}
