<?php

/* YesWeScanBundle:Sondage:creation.html.twig */
class __TwigTemplate_3b71f452226d0cce16225921ee05eec8ff8c820eafb15c7bcd3af70d85ca3407 extends Twig_Template
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
        echo " - Etape 1";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"clearer\">&nbsp;</div>
<div id=\"Pgrey\">
    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            var reponse = 2;
            \$( \"#addQ\" ).click(function() {
                event.preventDefault();
                \$( \"#yeswescan_homepage_sondage_register_form_reponse\" + reponse ).next().show();
                reponse+=1;
                if(reponse == 5){
                    \$(\"#addQ\").hide();
                }
            });
            \$(\"#nextStep\").click(function(){
                event.preventDefault();
                \$( \"#step2\" ).show();
                \$( \"#step1\" ).hide();
            });
        });
    </script>

    <div id=\"step1\">
        <div class=\"full\">
                <h2>Étape 1/3 :</h2>
                <h3>Votre question :</h3>
                ";
        // line 33
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "question"), 'widget', array("attr" => array("placeholder" => "Saisissez votre question ici", "cols" => 95, "rows" => 1)));
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "context"), 'widget', array("attr" => array("placeholder" => "Saisissez le texte contextuel de votre question ici", "cols" => 95, "rows" => 5)));
        echo "
                <p>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "private"), 'widget');
        echo "<label for=\"yeswescan_homepage_sondage_register_form_private\" id=\"speF\"><span class=\"ui\"></span>Privée</label></p>
                <br>
                <h3>Vos réponses :</h3>

                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reponse1"), 'widget', array("attr" => array("placeholder" => "Saisissez votre première réponse ici", "cols" => 95, "rows" => 1)));
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reponse2"), 'widget', array("attr" => array("placeholder" => "Saisissez votre seconde réponse ici", "cols" => 95, "rows" => 1)));
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reponse3"), 'widget', array("attr" => array("placeholder" => "Saisissez votre troisième réponse ici", "cols" => 95, "rows" => 1, "style" => "display: none;")));
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reponse4"), 'widget', array("attr" => array("placeholder" => "Saisissez votre quatrième réponse ici", "cols" => 95, "rows" => 1, "style" => "display: none;")));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reponse5"), 'widget', array("attr" => array("placeholder" => "Saisissez votre dernière réponse ici", "cols" => 95, "rows" => 1, "style" => "display: none;")));
        echo "
                <a href=\"\" id=\"addQ\">+ Ajouter une réponse (5 max.)</a>
                <a id=\"nextStep\" class=\"nextStep\" href=\"\">Étape suivante !</a>
        </div>
    </div>
    <div id=\"step2\" style=\"display: none;\">
        <div class=\"full\">
            <h2>Étape 2/3 :</h2>
            <h3>Votre template :</h3>

            ";
        // line 54
        $context["counter"] = 0;
        // line 55
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "idTemplate"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 56
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                <label for=\"";
            // line 57
            echo twig_escape_filter($this->env, ("yeswescan_homepage_sondage_register_form_idTemplate_" . $this->getContext($context, "counter")), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/yeswescan/images/templates/template" . $this->getContext($context, "counter")) . ".png")), "html", null, true);
            echo "\" alt=\"\" class=\"templates\" /></label>
                ";
            // line 59
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "enregistrer"), 'widget', array("label" => "Étape suivante !", "attr" => array("class" => "nextStep2")));
        echo "
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
        </div>
    </div>
 </div>

";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Sondage:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  157 => 62,  154 => 61,  148 => 60,  146 => 59,  142 => 58,  138 => 57,  133 => 56,  128 => 55,  126 => 54,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  90 => 36,  86 => 35,  82 => 34,  77 => 33,  50 => 7,  47 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
