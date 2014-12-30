<?php

/* adminBundle:union_admin:Society.html.twig */
class __TwigTemplate_ecd70e75a28c214286131c2239c10744138a79e26e2cf3a590d8de10954ea783 extends Twig_Template
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
            \t";
        // line 55
        echo "            </li>
            <li class='has-sub2 '><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("Newsmaster");
        echo "\"> News Master</a> 
            \t";
        // line 62
        echo "            </li>
            <li class='has-sub2 '><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("Announcementmaste");
        echo "\">Announcement Maste</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("mmut");
        echo "\"> Minutes of Meeting Upload Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("data_tool");
        echo "\"> Data Sync Tool</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("request_solve_master");
        echo "\"> Request Solve Master</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("meeting_data_setting");
        echo "\"> Next Meeting Date Setting</a> </li>
            <li class='has-sub2 '><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("recirpient_master");
        echo "\"> Reciepient Master</a> </li>
            </ul>
        </li>
        <li  class='has-sub2 '><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("unionadmin");
        echo "\">union Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("Society");
        echo "\">Society</a></li>
            \t<li class='has-sub2 '><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("Village");
        echo "\">Village</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("HouseHold");
        echo "\">House Hold</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("UserMaster");
        echo "\">User Master</a></li>
                
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">Common Admin</a>
        \t<ul>
            \t<li class='has-sub2 '><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("ChangePassword");
        echo "\">Change Password</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("AnimalMaster");
        echo "\">Animal Master</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("AnimalRetagging");
        echo "\">Animal Retagging</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("AnimalMovement");
        echo "\">Animal Movement</a></li>
                <li class='has-sub2 '><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("Link_Grahak_to_Animal");
        echo "\">Link Grahak to Animal</a></li>
            </ul>
        </li>
        
        <li  class='has-sub2 '><a href=\"#\">FIP</a>
        \t<ul>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("CampMaster");
        echo "\">Camp Master</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp Visit</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("Add_Animal_in_FIP");
        echo "\" class=\"login-window\">Add Animal in FIP</a></li>
\t\t</ul>
        </li>
        
        <li class='has-sub2 '><a href=\"";
        // line 99
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
        // line 113
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">Camp</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">AI</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("CampVisit");
        echo "\">reports</a></li>
\t\t\t<li class='has-sub2 '><a href=\"";
        // line 116
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
    

\t <!--start_body_main_text_contanear-->
    <div class=\"body_main_text_contanear\">
    <h1 class=\"main_heading\">society name</h1>
      <div class=\"body_white_pannel\">
\t   <form action=\"\" method=\"post\">
      \t<div class=\"form_left_area\">
        \t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Union Name</p>
\t\t\t<select class=\"select_style5\" name=\"Union_Name\" id=\"Union_Name\"><option>Select Value</option></select>
            </div>
\t\t\t
\t\t\t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">society code</p>
\t\t\t<input class=\"input_style8\" type=\"text\" name=\"society_code\" id=\"society_code\" />
            <a href=\"#\" class=\"search_but2\">Search</a>
            </div>
\t\t\t
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Society Name</p>
\t\t\t<input class=\"input_style7\" type=\"text\"  name=\"Society_Name\" id=\"Society_Name\"/>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Society Gujarati code</p>
\t\t\t<input class=\"input_style7\" type=\"text\"  name=\"society_guj_code\" id=\"society_guj_code\"/>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">parent sociecty code</p>
\t\t\t<input class=\"input_style7\" type=\"text\"  name=\"parent_sociecty_code\" id=\"parent_sociecty_code\"/>
\t\t\t</div>
\t\t\t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">taluka name</p>
\t\t\t<select class=\"select_style5\" name=\"taluka_name\" id=\"taluka_name\"><option>Select value</option></select>
            </div>
            
\t\t\t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">village name</p>
\t\t\t<select class=\"select_style5\" name=\"village_name\" id=\"village_name\"><option>Select union first</option></select>
            </div>
             <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">TIN no. </p>
\t\t\t<input class=\"input_style7\" type=\"text\" name=\"TIN_no\"  id=\"TIN_no\"/>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">TIN Date </p>
\t\t\t<input class=\"input_style7\" type=\"text\" name=\"TIN_Date\" name=\"TIN_Date\" />
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Registration date</p>
\t\t\t<input class=\"input_style7\" type=\"text\"  name=\"Registration_date\" id=\"Registration_date\"/>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Registration no.</p>
\t\t\t<input class=\"input_style7\" type=\"text\"  name=\"Registration_no\" id=\"Registration_no\"/>
            </div>
            
\t\t\t<div class=\"full_w\">
            <label class=\"redio_style3\"><input type=\"checkbox\" value=\"checkbox\" id=\"In_PEP\" name=\"In_PEP\"> In PEP. </label>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Society Incharge (P.E.P)</p>
\t\t\t<select class=\"select_style5\" name=\"Society_Incharge\" id=\"Society_Incharge\"><option>Select value</option></select>
            </div>
\t\t\t<div class=\"full_w\">
\t\t<input type=\"submit\"  value=\"save\" class=\"green_but\" />
\t\t</div>
         </form>
        </div>
\t\t
        
        <div class=\"full_w\">
        <a href=\"#\" class=\"red_but\">Back</a>
        ";
        // line 226
        echo "        </div>
\t  </div>
           \t       
      
    </div>
    <!--end_body_main_text_contanear-->

";
    }

    public function getTemplateName()
    {
        return "adminBundle:union_admin:Society.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 226,  221 => 116,  217 => 115,  213 => 114,  209 => 113,  192 => 99,  185 => 95,  181 => 94,  177 => 93,  168 => 87,  164 => 86,  160 => 85,  156 => 84,  152 => 83,  142 => 76,  138 => 75,  134 => 74,  130 => 73,  125 => 71,  119 => 68,  115 => 67,  111 => 66,  107 => 65,  103 => 64,  99 => 63,  96 => 62,  92 => 56,  89 => 55,  85 => 38,  81 => 37,  77 => 36,  73 => 34,  48 => 11,  45 => 10,  38 => 6,  35 => 5,  30 => 3,);
    }
}
