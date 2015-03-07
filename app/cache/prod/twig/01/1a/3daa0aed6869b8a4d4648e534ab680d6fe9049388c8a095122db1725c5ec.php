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
        // line 10
        echo "
         ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        
    </head>
    <body style=\"background-color:#DFDEDE\">
             <div class=\"container\" style=\"background-color:white\">


             ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
             ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
             ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 56
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
             <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

         ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "                 <div class=\"page-header\">
                        <div class=\"row \">
                            <div class=\"col-lg-1 col-lg-offset-1\">
                                <!--img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/img/logo.jpg"), "html", null, true);
        echo "\"--> 
                            </div> 
                            <div class=\"col-lg-6 col-lg-offset-3\">
                                 <ul class=\"nav nav-tabs\">
                                  <li role=\"navigation\" class=\"active\"><a href=\"#\">Home</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Profile</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Messages</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Covoiturage</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Notifications</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Se connecter</a></li>
                                  <li role=\"navigation\"><a href=\"#\">S'inscrire</a></li>
                                  <li role=\"navigation\"><a href=\"#\">Guide</a></li>
                                </ul> 
                            </div> 

                        </div>
                  </div>

             ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "
             ";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
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
        return array (  144 => 50,  141 => 49,  136 => 46,  133 => 45,  110 => 25,  105 => 22,  102 => 21,  94 => 12,  91 => 11,  85 => 8,  80 => 7,  77 => 6,  71 => 5,  62 => 56,  60 => 49,  57 => 48,  55 => 45,  52 => 44,  50 => 21,  42 => 15,  40 => 11,  37 => 10,  35 => 6,  31 => 5,  25 => 1,);
    }
}
