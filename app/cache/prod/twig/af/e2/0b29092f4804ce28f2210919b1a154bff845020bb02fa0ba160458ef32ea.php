<?php

/* YesWeScanBundle:Home:index.html.twig */
class __TwigTemplate_afe20b29092f4804ce28f2210919b1a154bff845020bb02fa0ba160458ef32ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'inscription' => array($this, 'block_inscription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 4
    public function block_inscription($context, array $blocks = array())
    {
        // line 5
        echo "
<script type=\"text/javascript\">
        \$( document ).ready(function() {

        var register_form_opened = false;
        var connexion_form_opened = false;
        var header_opened = false;

            \$( \"#inscription\" ).click(function() {
                event.preventDefault();
                if( !header_opened )
                {
                    \$( \"header\" ).css('height','100px');
                    header_opened = true;

                    if( !register_form_opened )
                    {
                        
                        \$( \"#inscription_form\" ).show();
                        \$( \"#login_form\" ).hide();
                        register_form_opened = true;
                        
                    }
                    
                }
                else
                {
                    if(connexion_form_opened)
                    {
                        \$( \"#inscription_form\" ).show();
                        \$( \"#login_form\" ).hide();
                        register_form_opened = true;
                        connexion_form_opened = false;
                    }
                    else
                    {
                        \$( \"header\" ).css('height','60px');
                        \$( \"#inscription_form\" ).hide();
                        register_form_opened = false;
                        header_opened = false;
                    }
                    
                }

            });

            \$( \"#connexion\" ).click(function() {
                event.preventDefault();
                if( !header_opened )
                {
                    \$( \"header\" ).css('height','100px');
                    header_opened = true;

                    if( !connexion_form_opened )
                    {
                        
                        \$( \"#login_form\" ).show();
                        \$( \"#inscription_form\" ).hide();
                        connexion_form_opened = true;
                        
                    }
                    
                }
                else
                {
                    if(register_form_opened)
                    {
                        \$( \"#login_form\" ).show();
                        \$( \"#inscription_form\" ).hide();
                        connexion_form_opened = true;
                        register_form_opened = false;
                    }
                    else
                    {
                        \$( \"header\" ).css('height','60px');
                        \$( \"#login_form\" ).hide();
                        connexion_form_opened = false;
                        header_opened = false;
                    }

                }
                
            });

            

        });
</script>

<div id=\"connect\">
";
        // line 95
        if (($this->getContext($context, "session_id") != null)) {
            // line 96
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_profil", array("idUser" => $this->getContext($context, "session_id"))), "html", null, true);
            echo "\" class=\"myProfil\">
        <div id=\"profil\">
            <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/icon_user.png"), "html", null, true);
            echo "\" alt=\"\" id=\"icon_user\"/>
            <p>Bonjour, ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "pseudo"), "html", null, true);
            echo "</p>
        </div>
    </a>
";
        } else {
            // line 103
            echo "
    <a href=\"\"><div id=\"inscription\">
            <p>INSCRIPTION GRATUITE</p>
        </div></a>
        <a href=\"\">
            <div id=\"connexion\">
                <p>SE CONNECTER</p>
            </div>
        </a>
";
        }
        // line 113
        echo "

    </div>

    
    <div id=\"inscription_form\" class=\"full\">  
 
        ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
        
        ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

    </div>

    <div id=\"login_form\" class=\"full\">  
 
        ";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "formLog"), 'form_start');
        echo "
        
        ";
        // line 130
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "formLog"), 'form_end');
        echo "

    </div>



    
";
    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        // line 141
        echo "<div class=\"shadow\"></div>
<div>
    <div id=\"fullpage\">


        <div class=\"section active\">




            <div id=\"content\">
                <div id=\"gauche\">
                    <video id=\"videoDemo\" loop=\"true\" autoplay=\"true\" controls=\"controls\" >
                        <source src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/tuto.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                        Ici la description alternative
                    </video>

                </div>
                <div id=\"droite\">

                    
                    <h2>Votre sondage QR Code
                        <br />créé en un clic</h2>
                    <h3>Créez vos sondages en toute simplicité et recevez
                        <br />votre QR Code personnalisé !</h3>
                    <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_creation");
        echo "\"><div id=\"createButton\"><p>CRÉEZ VOTRE SONDAGE</p></div></a>
                </div>
            </div>

        </div>



        <div class=\"section\">


            <div id=\"content2\">
                <div class=\"full speCenter\">
                    <h2>Derniers sondages :</h2>
                    <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/templates.png"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
            </div>

        </div>







    </div>




    <div class=\"clearer\">&nbsp;</div>

    <div id=\"search\">
        <div class=\"full\">
            <p>RECHERCHER UN SONDAGE :</p>

                ";
        // line 204
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_search"), 'form_start');
        echo "
                ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_search"), "question"), 'widget', array("attr" => array("placeholder" => "Saisissez votre question ici", "cols" => 95, "rows" => 1)));
        echo "
                <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/images/magnifier13.png"), "html", null, true);
        echo "\" alt=\"\" id=\"loupe\" />
                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_search"), "Rechercher"), 'widget', array("label" => "Recherche !"));
        echo "
                ";
        // line 208
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_search"), 'form_end');
        echo "

            
        </div>
    </div>



    <div style=\"display: none;\">
        ";
        // line 217
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
    </div>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#fullpage').fullpage({
                navigation: true,
                navigationPosition: 'right'
            });
        });
    </script>

    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/js/jquery.easings.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/js/jquery.fullPage.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\">
        \$(document).ready(function() {
            document.getElementById('videoDemo').play();
        });
    </script>

</div>
";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 233,  328 => 231,  323 => 229,  308 => 217,  296 => 208,  292 => 207,  288 => 206,  284 => 205,  279 => 204,  253 => 180,  236 => 166,  221 => 154,  206 => 141,  203 => 140,  191 => 130,  186 => 128,  177 => 122,  172 => 120,  163 => 113,  151 => 103,  144 => 99,  140 => 98,  134 => 96,  132 => 95,  40 => 5,  37 => 4,  30 => 2,);
    }
}
