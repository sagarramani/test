<?php

namespace Acme\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PEPAdminController extends Controller
{
    public function PEPAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:PEP.html.twig');
    }
	public function Bull_masterAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:Bull_master.html.twig');
    }
	public function AI_technical_Employee_MasterAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:AI_technical_Employee_Master.html.twig');
    }
	public function AI_centerAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:AI_center.html.twig');
    }
	public function AI_technicianAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:AI_technician.html.twig');
    }
	public function AI_Animal_masterAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:AI_Animal_master.html.twig');
    }
	public function AI_Animal_MovementAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:AI_Animal_Movement.html.twig');
    }
	public function Death_Sold_RegisterAction()
    {//exit('FCSDF');
        return $this->render('adminBundle:PEP:Death_Sold_Register.html.twig');
    }
	
}
