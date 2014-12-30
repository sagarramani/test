<?php

namespace Acme\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UnionAdminController extends Controller
{
    public function SocietyAction()
    {
        return $this->render('adminBundle:union_admin:Society.html.twig');
    }
	 public function VillageAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:union_admin:Village.html.twig');
    }
	 public function HouseHoldAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:union_admin:HouseHold.html.twig');
    }
	 public function UserMasterAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:union_admin:UserMaster.html.twig');
    }
	
}
