<?php

/* ::base.html.twig */
class __TwigTemplate_011a3daa0aed6869b8a4d4648e534ab680d6fe9049388c8a095122db1725c5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
         ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        
    </head>
    <body style=\"background-color:#DFDEDE\">
             <div class=\"container\" style=\"background-color:white\">


             ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
             ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
             ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "        
        
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
             <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
             <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

         ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "                 <div class=\"page-header\">
                        <div class=\"row \">
                            <div class=\"col-lg-1 col-lg-offset-1\">
                                <!--img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/img/logo.jpg"), "html", null, true);
        echo "\"--> 
                            </div> 
                            <div class=\"col-lg-4 col-lg-offset-6\">
                               
                                 <ul class=\"nav nav-tabs\">
                                  <li role=\"navigation\" class=\"active\"><a href=\"#\">Home</a></li>
                                  
                                  ";
        // line 33
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array(), "any", true, true)) {
            // line 34
            echo "                                      <li role=\"navigation\"><a href=\"#\">Profile</a></li>
                                      <li role=\"navigation\"><a href=\"#\">Messages</a></li>
                                      <li role=\"navigation\"><a href=\"#\">Covoiturage</a></li>
                                      <li role=\"navigation\"><a href=\"#\">Notifications</a></li>
                                  
                                  ";
        } else {
            // line 40
            echo "                                     <li role=\"navigation\"><a href=\"#\">Se connecter</a></li>
                                     <li role=\"navigation\"><a href=\"#\">S'inscrire</a></li>
                                 ";
        }
        // line 43
        echo "                                  <li role=\"navigation\"><a href=\"#\">Guide</a></li>
                                </ul> 
                            </div> 

                        </div>
                  </div>

             ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "
             ";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "                  <div class=\"page-header\">
                    
                 </div>
               
              
             ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  158 => 56,  153 => 53,  150 => 52,  139 => 43,  134 => 40,  126 => 34,  124 => 33,  114 => 26,  109 => 23,  106 => 22,  98 => 13,  95 => 12,  89 => 9,  85 => 8,  80 => 7,  77 => 6,  71 => 5,  62 => 63,  60 => 56,  57 => 55,  55 => 52,  52 => 51,  50 => 22,  42 => 16,  40 => 12,  37 => 11,  35 => 6,  31 => 5,  25 => 1,);
    }
}
