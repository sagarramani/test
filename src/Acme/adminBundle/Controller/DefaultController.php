<?php

namespace Acme\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function Union_CreationAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:Union_Creation.html.twig');
    }
	public function LoginAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:login.html.twig');
    }
	public function SMSAction()
    {
        return $this->render('adminBundle:Default:sms.html.twig');
    }
	public function NewsmasterAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:NewsMaster.html.twig');
    }
	public function AnnouncementmasteAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:Announcementmaste.html.twig');
    }
	public function unionadminAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:unionadmin.html.twig');
    }
	public function mmutAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:mmut.html.twig');
    }
	public function datatoolAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:datatool.html.twig');
    }
	public function request_solve_masterAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:request_solve_master.html.twig');
    }
	public function meeting_data_settingAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:meeting_data_setting.html.twig');
    }
	public function recirpient_masterAction()
    {//echo'<pre>';print_r($_POST);exit;
        return $this->render('adminBundle:Default:recirpient_master.html.twig');
    }
	
}
