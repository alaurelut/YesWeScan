<?php

/* ::base.html.twig */
class __TwigTemplate_c5c2caa5601dbf7075510573a52acfa73d52fd938aac95c7c5eba4234046980b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'inscription' => array($this, 'block_inscription'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/css/jquery.fullPage.css"), "html", null, true);
        echo "\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <header>
        <div class=\"full\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("yes_we_scan_homepage");
        echo "\">
                <img id=\"logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/LogoHD.png"), "html", null, true);
        echo "\" alt=\"Yes We Scan\" />
            </a>
            <div id=\"menu\">
                <ul>
                    <a href=\"\">
                        <li>COMMENT CA MARCHE ?</li>
                    </a>
                    <a href=\"\">
                        <li>SUPPORT</li>
                    </a>
                    <a href=\"\">
                        <li>BLOG</li>
                    </a>
                </ul>
            </div>



            ";
        // line 34
        $this->displayBlock('inscription', $context, $blocks);
        // line 35
        echo "
        </div>

        

        
    </header>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        <footer>
            <p>© 2014 Yes We Scan. Tous droits réservés | <a href=\"\">Mentions légales</a></p>
        </footer>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "YesWeScan";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_inscription($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  121 => 42,  116 => 34,  111 => 6,  105 => 5,  97 => 46,  92 => 43,  81 => 35,  79 => 34,  58 => 16,  54 => 15,  46 => 10,  41 => 8,  34 => 6,  30 => 5,  24 => 1,  167 => 81,  163 => 79,  159 => 77,  148 => 75,  144 => 74,  141 => 73,  139 => 72,  131 => 67,  115 => 58,  103 => 48,  99 => 47,  90 => 42,  85 => 42,  80 => 40,  70 => 33,  39 => 4,  36 => 7,  29 => 2,);
    }
}
