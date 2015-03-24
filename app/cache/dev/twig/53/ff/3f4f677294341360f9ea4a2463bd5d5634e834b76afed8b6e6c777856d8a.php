<?php

/* YesWeScanBundle:Sondage:print.html.twig */
class __TwigTemplate_53ff3f4f677294341360f9ea4a2463bd5d5634e834b76afed8b6e6c777856d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/css/style.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Print";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"print\">
<style type=\"text/css\">
@media print {
\theader,footer,#printSondage { display: none; }
}
</style>
<input type=\"button\" id=\"printSondage\"
  onClick=\"window.print()\" 
  value=\"Imprimez cette page\"/>

";
        // line 17
        if (($this->getContext($context, "sondage") != null)) {
            // line 18
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "context"), "html", null, true);
            echo "</h3>
<h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "question"), "html", null, true);
            echo "</h1>

\t<div class=\"block_sondage nbSondage";
            // line 21
            echo twig_escape_filter($this->env, $this->getContext($context, "nbReponse"), "html", null, true);
            echo "\">
\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 1)), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "reponse1"), "html", null, true);
            echo "</div>
\t \t<div><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 1)))), "html", null, true);
            echo "\" /></div></a>
\t</div>

\t<div class=\"block_sondage nbSondage";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "nbReponse"), "html", null, true);
            echo "\">
\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 2)), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "reponse2"), "html", null, true);
            echo "</div>
\t \t<div><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 2)))), "html", null, true);
            echo "\" /></div></a>
\t</div>


\t";
            // line 32
            if (($this->getAttribute($this->getContext($context, "sondage"), "reponse3") != null)) {
                // line 33
                echo "
\t<div class=\"block_sondage nbSondage";
                // line 34
                echo twig_escape_filter($this->env, $this->getContext($context, "nbReponse"), "html", null, true);
                echo "\">
\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 3)), "html", null, true);
                echo "\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "reponse3"), "html", null, true);
                echo "</div>
\t \t<div><img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 3)))), "html", null, true);
                echo "\" /></div></a>
    </div>

\t";
            }
            // line 40
            echo "\t";
            if (($this->getAttribute($this->getContext($context, "sondage"), "reponse4") != null)) {
                // line 41
                echo "
\t<div class=\"block_sondage nbSondage";
                // line 42
                echo twig_escape_filter($this->env, $this->getContext($context, "nbReponse"), "html", null, true);
                echo "\">
\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 4)), "html", null, true);
                echo "\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "reponse4"), "html", null, true);
                echo "</div>
\t \t<div><img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 4)))), "html", null, true);
                echo "\" /></div></a>
    </div>

\t";
            }
            // line 48
            echo "\t";
            if (($this->getAttribute($this->getContext($context, "sondage"), "reponse5") != null)) {
                // line 49
                echo "
\t<div class=\"block_sondage nbSondage";
                // line 50
                echo twig_escape_filter($this->env, $this->getContext($context, "nbReponse"), "html", null, true);
                echo "\">
\t\t<a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 5)), "html", null, true);
                echo "\"><div>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "reponse5"), "html", null, true);
                echo "</div>
\t \t<div><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('endroid_qrcode')->qrcodeDataUriFunction((("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_vote", array("idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"), "numReponse" => 5)))), "html", null, true);
                echo "\" /></div></a>
    </div>

\t";
            }
            // line 56
            echo "
";
        } else {
            // line 58
            echo "Sondage non trouvé
";
        }
        // line 60
        echo "
\t<div class='clearer'></div>
\t<div id=\"ccm\">
\t\tComment ça marche ?<br> <br>


\t\tPour répondre à la question, flasher le QRCode correspondant à votre réponse. <br>
\t\tVous n’avez pas de lecteur QRCode ?<br>
\t\tDonnez vontre réponse via votre navigateur web préféré en vous rendant ici : ";
        // line 68
        echo twig_escape_filter($this->env, $this->getContext($context, "currentUrl"), "html", null, true);
        echo "<br> <br>


\t\tService rendu par Yes-We-Scan.fr
\t</div>



</div>
";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Sondage:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 68,  183 => 60,  179 => 58,  175 => 56,  168 => 52,  162 => 51,  158 => 50,  155 => 49,  152 => 48,  145 => 44,  139 => 43,  135 => 42,  132 => 41,  129 => 40,  122 => 36,  116 => 35,  112 => 34,  109 => 33,  107 => 32,  100 => 28,  94 => 27,  90 => 26,  84 => 23,  78 => 22,  74 => 21,  69 => 19,  64 => 18,  62 => 17,  50 => 7,  47 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
