<?php

/* adminBundle:Default:login.html.twig */
class __TwigTemplate_ed47d75f2336aadc1a8ee4dde8c7cdb0e304d51eae7c2d256016f525f7756372 extends Twig_Template
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
        echo "\">Union Creation</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Newsmaster");
        echo "\"> News Master</a></li> 
            <li class='has-sub2 '><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Announcementmaste");
        echo "\">Announcement Maste</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("mmut");
        echo "\"> Minutes of Meeting Upload Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("data_tool");
        echo "\"> Data Sync Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("request_solve_master");
        echo "\"> Request Solve Master</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("meeting_data_setting");
        echo "\"> Next Meeting Date Setting</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("recirpient_master");
        echo "\"> Reciepient Master</a> </li>
            </ul>
        </li>
        <li  class='has-sub2 '><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("unionadmin");
        echo "\">union Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Society");
        echo "\">Society</a></li>
            \t<li class='has-sub2 '><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Village");
        echo "\">Village</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("HouseHold");
        echo "\">House Hold</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("UserMaster");
        echo "\">User Master</a></li>
                
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">Common Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("ChangePassword");
        echo "\">Change Password</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("AnimalMaster");
        echo "\">Animal Master</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("AnimalRetagging");
        echo "\">Animal Retagging</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("AnimalMovement");
        echo "\">Animal Movement</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("Link_Grahak_to_Animal");
        echo "\">Link Grahak to Animal</a></li>
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">FIP</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("CampMaster");
        echo "\">Camp Master</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp Visit</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("Add_Animal_in_FIP");
        echo "\" class=\"login-window\">Add Animal in FIP</a></li>
\t\t</ul>
        </li>
        
        <li class='has-sub2 '><a href=\"";
        // line 76
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
        // line 90
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">AI</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">reports</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 93
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
    <h1 class=\"main_heading\">LOGIN CREATION</h1>
      <div class=\"body_white_pannel\">
\t  <form action=\"\" method=\"post\">
      \t<div class=\"full_w\">
        <p class=\"body_white_panne_text_style2\">Union Name</p>
        <select class=\"select_style5\" id=\"Union_Name\" name=\"Union_Name\" >
\t\t <option>Select Value</option>
\t\t</select>
       </div>
         
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Full Name</p>
        <input class=\"input_style7\" type=\"text\" id=\"Full_Name\" name=\"Full_Name\"/>
        </div>
         
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Login ID</p>
        <input class=\"input_style7\" type=\"text\" id=\"lodin_id\" name=\"lodin_id\"/>
        </div>
      <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Password</p>
        <input class=\"input_style7\" type=\"text\" id=\"password\" name=\"password\" />
        </div>
      <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Confirm Password</p>
        <input class=\"input_style7\" type=\"text\" id=\"c_password\" name=\"c_password\" />
        </div>
      <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Email</p>
        <input class=\"input_style7\" type=\"text\" id=\"email\" name=\"email\" />
        </div>
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Login Operation</p>
        <select class=\"select_style5\" id=\"login_operatrion\" name=\"login_operatrion\">
\t\t <option>Select Value</option>
\t\t</select>
        </div>
      <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Login Type</p>
        <select class=\"select_style5\" id=\"Login_Type\" name=\"Login_Type\">
\t\t <option>FIP</option>
\t\t <option> PEP</option>
\t\t <option>FIP and PEP</option>
\t\t <option>PEP and PMP</option>
\t\t <option>All</option>
\t\t </select>
        </div>
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Change Password at First Login</p>
        <select class=\"select_style5\" id=\"change_psw_login\" name=\"change_psw_login\">
\t\t <option checked>YES</option>
\t\t <option>NO</option>
\t\t </select>
        </div>
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">FIP Meeting Member</p>
        <select class=\"select_style5\" id=\"f_m_member\" name=\"f_m_member\">
\t\t <option>YES</option>
\t\t <option>NO</option>
\t\t </select></div>
\t  <div class=\"full_w\">
\t\t<p class=\"body_white_panne_text_style2\">Status</p>
        <select class=\"select_style5\" id=\"Status\" name=\"Status\">
\t\t <option>Active</option>
\t\t <option>In Active</option>
\t\t </select></div>
\t\t
\t   <div class=\"full_w\">
\t\t\t<input type=\"submit\"  value=\"save\" class=\"green_but\" />
\t\t</div>
         </form>
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
        return "adminBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 93,  211 => 92,  207 => 91,  203 => 90,  186 => 76,  179 => 72,  175 => 71,  171 => 70,  162 => 64,  158 => 63,  154 => 62,  150 => 61,  146 => 60,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  119 => 48,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  77 => 36,  73 => 34,  48 => 11,  45 => 10,  38 => 6,  35 => 5,  30 => 3,);
    }
}
