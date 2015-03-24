<?php

/* YesWeScanBundle:Profil:index.html.twig */
class __TwigTemplate_539f01e0ac5abc5c1fe1b10873a7fa3ab5ee065a1b9de8cec3939c7105ae40c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Profil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            

            \$( \"#monProfil\" ).click(function() {
                event.preventDefault();
                \$( \"#divProfil\" ).show();
                \$( \"#divQuestion\" ).hide();
            });
            \$(\"#mesQuestions\").click(function(){
                event.preventDefault();
                \$( \"#divQuestion\" ).show();
                \$( \"#divProfil\" ).hide();
            });
        });
    </script>

<div id=\"Pgrey\">
\t<div id=\"pgProfil\">
\t\t<div class=\"full2\">
\t\t\t<div id=\"menuP\">
\t\t\t\t<ul>
\t\t\t\t\t<a href=\"#\" id =\"monProfil\">
\t\t\t\t\t\t<li class=\"FirstP active\">Votre profil</li>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" id =\"mesQuestions\">
\t\t\t\t\t\t<li class=\"SecondP\">Mes questions</li>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("yes_we_scan_profil_sondage");
        echo "\">
\t\t\t\t\t\t<li class=\"ThirdP\">Mes sondages</li>
\t\t\t\t\t</a>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"sectionProfil\">
\t\t\t\t<div id=\"divProfil\">
\t\t\t\t\t<h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "pseudo"), "html", null, true);
        echo ",</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>INSCRIPTION :</strong> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "dateInscription"), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li><strong>DERNIER SONDAGE :</strong>
\t\t\t\t\t\t";
        // line 44
        if ((twig_length_filter($this->env, $this->getContext($context, "sondages")) > 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_print", array("idUser" => $this->getAttribute($this->getAttribute($this->getContext($context, "sondages"), 0, array(), "array"), "idUser"), "idSondage" => $this->getAttribute($this->getAttribute($this->getContext($context, "sondages"), 0, array(), "array"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sondages"), 0, array(), "array"), "question"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t PAS ENCORE DE SONDAGE
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</li>



\t\t\t\t\t\t<li><strong>DERNIERES RÉPONSES :</strong> 25 MAI 2014</li>
\t\t\t\t\t\t<li><strong>DERNIER HOSPOT :</strong> 5, RUE DE LA GEEKERIE 75005 PARIS</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"record\">
\t\t\t\t\t\t<div id=\"sondages\">
\t\t\t\t\t\t\t<p><span>";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "sondages")), "html", null, true);
        echo "</span><br/>SONDAGE";
        if ((twig_length_filter($this->env, $this->getContext($context, "sondages")) > 1)) {
            echo "S";
        }
        echo " </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"reponses\">
\t\t\t\t\t\t\t<p><span>10</span><br/>RÉPONSES</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"divQuestion\">
\t\t\t\t\t<h3>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "pseudo"), "html", null, true);
        echo ",</h3>
\t\t\t\t\t<ul>



\t\t\t\t\t\t";
        // line 72
        if ((twig_length_filter($this->env, $this->getContext($context, "sondages")) > 0)) {
            // line 73
            echo "
\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sondages"));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 75
                echo "\t\t\t                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_print", array("idUser" => $this->getAttribute($this->getContext($context, "sondage"), "idUser"), "idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "question"), "html", null, true);
                echo "</a></li>
\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t<li>PAS ENCORE DE SONDAGE</li>
\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t



\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t

  \t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Profil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 81,  163 => 79,  159 => 77,  148 => 75,  144 => 74,  141 => 73,  139 => 72,  131 => 67,  115 => 58,  103 => 48,  99 => 46,  90 => 44,  85 => 42,  80 => 40,  70 => 33,  39 => 4,  36 => 3,  29 => 2,);
    }
}
