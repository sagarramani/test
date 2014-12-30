<?php

/* adminBundle:Default:Union_Creation.html.twig */
class __TwigTemplate_7ccfabce16b712a0856ca6ce7931c4b01f736330f70434d0c2f92d1f0c2a02f3 extends Twig_Template
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
<form method=\"post\">
<div class=\"dody_right_area\">
\t<div class=\"main_nav_contanear\">
    \t<!--nav_area-->
    \t<div class=\"main_nav_area\">
        <div id='menu2'>
    <ul>
    \t<li id=\"active1\" class='has-sub2 '><a href=\"";
        // line 35
        echo "\">HO Admin</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">Login Creation</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("SMS");
        echo "\">SMS Sending</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Union_Creation");
        echo "\">Union Creation</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Newsmaster");
        echo "\"> News Master</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("Announcementmaste");
        echo "\">Announcement Maste</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("mmut");
        echo "\"> Minutes of Meeting Upload Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("data_tool");
        echo "\"> Data Sync Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("request_solve_master");
        echo "\"> Request Solve Master</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("meeting_data_setting");
        echo "\"> Next Meeting Date Setting</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("recirpient_master");
        echo "\"> Reciepient Master</a> </li>
            </ul>
        </li>
        <li  class='has-sub2 '><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("unionadmin");
        echo "\">union Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Society");
        echo "\">Society</a></li>
            \t<li class='has-sub2 '><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Village");
        echo "\">Village</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("HouseHold");
        echo "\">House Hold</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("UserMaster");
        echo "\">User Master</a></li>
                
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">Common Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ChangePassword");
        echo "\">Change Password</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("AnimalMaster");
        echo "\">Animal Master</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("AnimalRetagging");
        echo "\">Animal Retagging</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("AnimalMovement");
        echo "\">Animal Movement</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("Link_Grahak_to_Animal");
        echo "\">Link Grahak to Animal</a></li>
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">FIP</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("CampMaster");
        echo "\">Camp Master</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp Visit</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("Add_Animal_in_FIP");
        echo "\" class=\"login-window\">Add Animal in FIP</a></li>
\t\t</ul>
        </li>
        
        <li class='has-sub2 '><a href=\"";
        // line 77
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
        // line 91
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">AI</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">reports</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 94
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
\t 
    <div class=\"body_main_text_contanear\">
    <h1 class=\"main_heading\">UNION CREATION</h1>
      <div class=\"body_white_pannel\">
\t  <form action=\"\" method=\"post\">
      \t<div class=\"full_w\">
\t\t\t<p class=\"body_white_panne_text_style1\">Union Code</p>
\t\t\t\t<input type=\"text\" name=\"union_code\" id=\"union_code\" class=\"input_style6\" />
\t\t\t<p class=\"body_white_panne_text_style2\">Union Name</p>
\t\t\t\t<input class=\"input_style6\" name=\"union_name\",id=\"union_name\" type=\"text\" />
        </div>
\t\t<div class=\"full_w\">
\t\t<input type=\"submit\"  value=\"save\" class=\"green_but\" />
\t\t</div>
         </form>
\t     
\t    <a href=\"#\" class=\"green_but\">Save</a>
\t    <a href=\"#\" class=\"blue_but\">Edit</a>
\t    

      </div>
   </div>
   <div class=\"footer_contanear\">
    <p><a href=\"#\">Brands</a>  |   <a href=\"#\">GCMMF</a>   |   <a href=\"#\">Fun & Amul</a>   |   <a href=\"#\">Parlours</a>    |     <a href=\"#\">Interact</a>  |    <a href=\"#\">Amul for india</a>     </p>
    </div>
    
</div>
<!--end_dody_right_area-->




</div>

";
    }

    public function getTemplateName()
    {
        return "adminBundle:Default:Union_Creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 94,  212 => 93,  208 => 92,  204 => 91,  187 => 77,  180 => 73,  176 => 72,  172 => 71,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  137 => 54,  133 => 53,  129 => 52,  125 => 51,  120 => 49,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  90 => 40,  86 => 39,  82 => 38,  78 => 37,  74 => 35,  48 => 11,  45 => 10,  38 => 6,  35 => 5,  30 => 3,);
    }
}
