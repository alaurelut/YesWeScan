<?php

/* YesWeScanBundle:Sondage:search.html.twig */
class __TwigTemplate_0f7cc171ca7a39e5eb864902ba7a6eddd5354d58a66d344fd938f262bc7cbded extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/css/styles.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Vote";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"search_result\">
\t<h1>
\t\tRecherche
\t</h1>
\t\t<ul>

            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "result"));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 14
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_we_scan_sondage_print", array("idUser" => $this->getAttribute($this->getContext($context, "sondage"), "idUser"), "idSondage" => $this->getAttribute($this->getContext($context, "sondage"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sondage"), "question"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Sondage:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  62 => 14,  58 => 13,  50 => 7,  47 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
