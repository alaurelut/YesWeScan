<?php

/* YesWeScanBundle:Sondage:creation_3.html.twig */
class __TwigTemplate_9211f0cc9f600961f4ff85a02f1f4294c8442ac4d1609d5181a2bdab70d673fd extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Etape 3";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 8
        echo "    <div class=\"clearer\">&nbsp;</div>
    <div id=\"Pgrey\">


    <div id=\"step3\">
        <div class=\"full\">

            <h2>Étape 3/3 :</h2>
            <h3>Vos hotspots :</h3>
            <div id=\"gauche\">
                <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/yeswescan/js/gmap.js"), "html", null, true);
        echo "\"></script>
                <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Search Box\">
                <div id=\"canvas\"></div>

            </div>
            <div id=\"droite\">
                <div id=\"contentDroite\">
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
                    <h4>Rechercher sur la carte :</h4>
                    <div class=\"create\">
                        <select>
                            <option selected=\"selected\">Ou sélectionner un lieu</option>
                            <option>Paris ?</option>
                        </select>
                        <div class=\"createOne\">
                            <strong>OU</strong>
                            <a id=\"showName\" href=\"\"><div id=\"createButtonLittle\"><p>CRÉEZ LE VOTRE</p></div></a>
                        </div>
                        <div id=\"hotspotName\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "Nom du HotSpot", "style" => "margin: 10px 5px;")));
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "position"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"clearer\">&nbsp;</div>
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "enregistrer"), 'widget', array("label" => "VALIDEZ VOTRE SONDAGE", "attr" => array("class" => "validateButton")));
        echo "
                    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                    ";
        // line 46
        echo "
                    <div id='info_hotspot'>Pour créer votre Sondage, veuillez nommez votre hotspot puis entrer une adresse sur la carte, vous pouvez déplacer le pointeur pour plus de précision</div>

                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "YesWeScanBundle:Sondage:creation_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  95 => 44,  91 => 43,  84 => 39,  80 => 38,  65 => 26,  55 => 19,  42 => 8,  39 => 6,  36 => 5,  29 => 3,);
    }
}
