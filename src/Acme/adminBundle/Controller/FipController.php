<?php

namespace Acme\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FipController extends Controller
{
    public function CampMasterAction()
    {
        return $this->render('adminBundle:Fip:CampMaster.html.twig');
    }
	 public function CampVisitAction()
    {
        return $this->render('adminBundle:Fip:CampVisit.html.twig');
    }
	 public function Add_Animal_in_FIPAction()
    {
        return $this->render('adminBundle:Fip:Add_Animal_in_FIP.html.twig');
    }
}
