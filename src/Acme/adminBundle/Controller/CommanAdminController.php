<?php

namespace Acme\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommanAdminController extends Controller
{
    public function ChangePasswordAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:comman_admin:ChangePassword.html.twig');
    }
	 public function AnimalMasterAction()
    {
        return $this->render('adminBundle:comman_admin:AnimalMaster.html.twig');
    }
	 public function AnimalRetaggingAction()
    {
        return $this->render('adminBundle:comman_admin:AnimalRetagging.html.twig');
    }
	 public function AnimalMovementAction()
    {
        return $this->render('adminBundle:comman_admin:AnimalMovement.html.twig');
    }
	public function Link_Grahak_to_AnimalAction()
    {
        return $this->render('adminBundle:comman_admin:Link_Grahak_to_AnimalAction.html.twig');
    }
	
}
