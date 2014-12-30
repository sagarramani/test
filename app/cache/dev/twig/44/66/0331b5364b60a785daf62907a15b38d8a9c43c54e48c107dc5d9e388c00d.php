<?php

/* adminBundle:comman_admin:Link_Grahak_to_AnimalAction.html.twig */
class __TwigTemplate_44660331b5364b60a785daf62907a15b38d8a9c43c54e48c107dc5d9e388c00d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'Javascript' => array($this, 'block_Javascript'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Javascript($context, array $blocks = array())
    {
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../css/login.css\" ></style>
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../css/media_screen.css\" ></style>
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"../css/style.css\" ></style>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"main_contanear\">
\t<!--start_dody_left_area-->
\t<div class=\"dody_left_area\">
\t<div class=\"logo_area\">
\t\t<a href=\"#\"><img src=\"../images/logo2.png\" alt=\"\" /></a>
\t</div>
    
\t<div class=\"left_bottom_logo_area\">
\t\t<img src=\"../images/logo3.png\" alt=\"\" />
\t\t<p>Village Code List<br /> Tagno Check Formula</p>
\t\t<h2>Copyright © 2014 <a href=\"#\">amul.org.in</a></h2>
\t</div>
    
</div>
<!--end_dody_left_area-->

<!--start_dody_right_area-->
<div class=\"dody_right_area\">
\t<div class=\"main_nav_contanear\">
    \t<!--nav_area-->
    \t<div class=\"main_nav_area\">
        <div id='menu2'>
    <ul>
    \t<li id=\"active1\" class='has-sub2 '><a href=\"";
        // line 34
        echo "\">HO Admin</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">Login Creation</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("SMS");
        echo "\">SMS Sending</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("Union_Creation");
        echo "\"> Union Creation</a> 
            </li>
            <li class='has-sub2 '><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Newsmaster");
        echo "\"> News Master</a> 
            \t";
        // line 46
        echo "            </li>
            <li class='has-sub2 '><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("Announcementmaste");
        echo "\">Announcement Maste</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("mmut");
        echo "\"> Minutes of Meeting Upload Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("data_tool");
        echo "\"> Data Sync Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("request_solve_master");
        echo "\"> Request Solve Master</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("meeting_data_setting");
        echo "\"> Next Meeting Date Setting</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("recirpient_master");
        echo "\"> Reciepient Master</a> </li>
            </ul>
        </li>
        <li  class='has-sub2 '><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("unionadmin");
        echo "\">union Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Society");
        echo "\">Society</a></li>
            \t<li class='has-sub2 '><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("Village");
        echo "\">Village</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("HouseHold");
        echo "\">House Hold</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("UserMaster");
        echo "\">User Master</a></li>
                
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">Common Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("ChangePassword");
        echo "\">Change Password</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("AnimalMaster");
        echo "\">Animal Master</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("AnimalRetagging");
        echo "\">Animal Retagging</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("AnimalMovement");
        echo "\">Animal Movement</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("Link_Grahak_to_Animal");
        echo "\">Link Grahak to Animal</a></li>
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">FIP</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("CampMaster");
        echo "\">Camp Master</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp Visit</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("Add_Animal_in_FIP");
        echo "\" class=\"login-window\">Add Animal in FIP</a></li>
\t\t</ul>
        </li>
        
        <li class='has-sub2 '><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("PEP");
        echo "\"> PEP </a>
\t\t<ul>
\t\t\t<li class='has-sub2 '><a href=\"#\"> Master</a> 
            \t<ul>
                \t<li class='has-sub2 '><a href=\"Bull_master\">Bull master</a></li> 
                    <li class='has-sub2 '><a href=\"AI_technical_Employee_Master\">AI technical Employee Master </a></li> 
                    <li class='has-sub2 '><a href=\"AI_center\">AI center</a></li> 
                    <li class='has-sub2 '><a href=\"AI_technician\">Assign D.C.S to AI technician</a></li> 
                    <li class='has-sub2 '><a href=\"AI_Animal_master\">AI Animal master</a></li> 
                    <li class='has-sub2 '><a href=\"AI_Animal_Movement\">AI Animal Movement</a></li> 
                    <li class='has-sub2 '><a href=\"Death_Sold_Register\">Death Sold Register</a></li> 
                     
                </ul>
\t\t\t</li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">AI</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">reports</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">formats</a></li>
\t\t\t</ul>
\t\t\t</li>
        <li class='has-sub2 '><a href=\"\"> Calf rearing </a></li>
         </ul>
    </div>
        </div>
        <!--nav_area-->
        
        <div class=\"profile_and_logout_area\">
        \t<div class=\"logout_area\"><a href=\"#\"><img src=\"../images/logout_but.png\" alt=\"\" /></a></div>
            
            <div class=\"profile_area\">
            \t<div class=\"profile_img_area\">
                <img src=\"../images/prifile_img.png\" alt=\"\" />
                </div>
                <div class=\"profile_text_area\">
                <p>Welcome<br /><span>Assif Alim</span></p>
                </div>
                <div class=\"profile_drop_area\">
                <div id='menu'>
                <ul>
                    <li  class='has-sub '><a href=\"our_services.html\"><img src=\"../images/dropdown_img.png\" alt=\"\" /></a>
                        <ul>
                            <li class='has-sub '><a href=\"https://smsinternet.teamwork.com/\">Login Portal</a></li>
                            <li class='has-sub '><a href=\"#\">Support Services</a></li>
                            <li class='has-sub '><a href=\"https://smsinternetcorporation.freshbooks.com/\">Pay Invoices</a></li>
                            <li class='has-sub '><a href=\"#\">Join a Meeting</a></li>
                        </ul>
                    </li>
                </ul>
    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--start_body_main_text_contanear-->
    <div class=\"body_main_text_contanear\">
\t\t<h1 class=\"main_heading\">Link Grahak to Animal</h1>
\t\t<div class=\"body_white_pannel\">
\t\t\t<div class=\"form_left_area\">
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<p class=\"body_white_panne_text_style1\">Union</p>
\t\t\t\t\t<select class=\"select_style5\" name=\"Union\" id=\"Union\"><option>Select Value</option></select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<p class=\"body_white_panne_text_style1\">Society</p>
\t\t\t\t\t<select class=\"select_style5\" name=\"Society\" id=\"Society\"><option>Select Value</option></select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<p class=\"body_white_panne_text_style1\">Tag No</p>
\t\t\t\t\t<input class=\"input_style7\" type=\"text\" name=\"Tag_No\" id=\"Tag_No\" />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<p class=\"body_white_panne_text_style1\">Grahak Name</p>
\t\t\t\t\t<input class=\"input_style7\" type=\"text\" name=\"Grahak_Name\" id=\"Grahak_Name\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<input type=\"submit\"  value=\"save\" class=\"green_but\" />
\t\t\t\t</div>\t
\t\t\t</form>
\t\t\t\t<div class=\"full_w\">
\t\t\t\t\t<a href=\"#\" class=\"red_but\">cancel</a>
\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" class=\"red_but\">update</a>
\t\t\t\t</div>
            
\t\t\t
\t\t\t</div>
\t\t\t</div>
</div></div>
    ";
    }

    public function getTemplateName()
    {
        return "adminBundle:comman_admin:Link_Grahak_to_AnimalAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 100,  215 => 99,  211 => 98,  207 => 97,  190 => 83,  183 => 79,  179 => 78,  175 => 77,  166 => 71,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  140 => 60,  136 => 59,  132 => 58,  128 => 57,  123 => 55,  117 => 52,  113 => 51,  109 => 50,  105 => 49,  101 => 48,  97 => 47,  94 => 46,  90 => 40,  85 => 38,  81 => 37,  77 => 36,  73 => 34,  48 => 11,  45 => 10,  38 => 6,  35 => 5,  30 => 3,);
    }
}
