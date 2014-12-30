<?php

/* adminBundle:Fip:CampVisit.html.twig */
class __TwigTemplate_437b3aa0f735d845055b7f30db1cf4c11532a6782529009692ff6cbbc891457c extends Twig_Template
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
        
        <li class='has-sub2 '><a href=\"\"> PEP </a></li>
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
\t
     <div class=\"body_main_text_contanear\">
    <h1 class=\"main_heading\">camp visit</h1>
      <div class=\"body_white_pannel\">
      \t<div class=\"form_left_area\">
\t\t<form action=\"\" method=\"post\">
        \t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Union Name</p>
\t\t\t<select class=\"select_style5\" name=\"Union_Name\" id=\"Union_Name\"><option>Select Value</option></select>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Village</p>
\t\t\t<select class=\"select_style5\" name=\"Village\" id=\"Village\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Tag No</p>
\t\t\t<input class=\"input_style7\" type=\"text\" name=\"Tag_No\" id=\"Tag_No\"/>
            </div>
      \t</div>\t
        
        <div class=\"form_right_area\">
        \t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Society (Display D.C.S Name ) </p>
\t\t\t<input class=\"input_style8\" type=\"text\" name=\"Society\" id=\"Society\"/>
            <input class=\"input_style9\" type=\"text\" name=\"Society1\" id=\"Society1\"/>
            </div>
        \t<div class=\"full_w\">
            <p class=\"body_white_panne_text_style1\">Camp No</p>
\t\t\t<select class=\"select_style5\" name=\"Camp_No\" id=\"Camp_No\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <a href=\"#\" class=\"search_but3\">Search</a>
            </div>
        </div>
      </div>
      
      
      <h1 class=\"main_heading2\">Treatment</h1>
      <div class=\"body_white_pannel\">
      \t<div class=\"form6_local_box1\">
        <h2>Local</h2>
        <p>Code</p>
        <h3>Medicine</h3>
        \t<div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first\" id=\"s_s_first\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first1\" id=\"s_s_first1\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first2\" id=\"s_s_first2\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first3\" id=\"s_s_first3\"><option>Select society First</option></select>
            </div>
        </div>
        
        <div class=\"form6_local_box1\" id=\"margin_left\">
        <h2>PERENTRAL</h2>
        <p>Code</p>
        <h3>Medicine</h3>
        \t<div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first4\" id=\"s_s_first4\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first5\" id=\"s_s_first5\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first6\" id=\"s_s_first6\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first7\" id=\"s_s_first7\"><option>Select society First</option></select>
            </div>
        </div>
        
        <div class=\"form6_local_box1\" id=\"margin_left\">
        <h2>ORAL</h2>
        <p>Code</p>
        <h3>Medicine</h3>
        \t<div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first8\" id=\"s_s_first8\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first9\" id=\"s_s_first9\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first10\" id=\"s_s_first10\"><option>Select society First</option></select>
            </div>
            <div class=\"full_w\">
            <input class=\"input_style10\" type=\"text\" / >
            <select class=\"select_style6\" name=\"s_s_first11\" id=\"s_s_first11\"><option>Select society First</option></select>
            </div>
        </div>
      </div>
      
      <h1 class=\"main_heading2\">Diagnosis</h1>
      <div class=\"body_white_pannel\">
      \t<div class=\"form6_local_box1\">
        <h4>Disease Code:</h4>
        <div class=\"full_w\">
        <input class=\"input_style11\" type=\"text\" / >
        </div>
        </div>
        
        <div class=\"form6_local_box1\" id=\"margin_left\">
        <h4>Disease </h4>
        <div class=\"full_w\">
        <select class=\"select_style7\" name=\"Disease\" id=\"Disease\"><option>Select Value</option></select>
        </div>
        </div>
        
        <div class=\"form6_local_box1\" id=\"margin_left\">
        <h4>Disease </h4>
        <div class=\"full_w\">
        <select class=\"select_style7\" name=\"Disease1\" id=\"Disease1\"><option>Select Value</option></select>
        </div>
        </div>
      </div>
      
\t  <div class=\"full_w\">
\t\t\t\t<input type=\"submit\"  value=\"save\" class=\"green_but\" />
\t\t\t</div>
         </form>
      <div class=\"full_w\">
      <a href=\"#\" class=\"red_but\">Back</a>
      <a href=\"#\" class=\"green_but\">Save</a>
      </div>
           \t       
      
    </div>
    <!--end_body_main_text_contanear-->

    ";
    }

    public function getTemplateName()
    {
        return "adminBundle:Fip:CampVisit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 95,  181 => 94,  177 => 93,  168 => 87,  164 => 86,  160 => 85,  156 => 84,  152 => 83,  142 => 76,  138 => 75,  134 => 74,  130 => 73,  125 => 71,  119 => 68,  115 => 67,  111 => 66,  107 => 65,  103 => 64,  99 => 63,  96 => 62,  92 => 56,  89 => 55,  85 => 38,  81 => 37,  77 => 36,  73 => 34,  48 => 11,  45 => 10,  38 => 6,  35 => 5,  30 => 3,);
    }
}
