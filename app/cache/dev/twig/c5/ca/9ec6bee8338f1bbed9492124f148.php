<?php

/* relayerrelayerBundle:Default:proyectos.html.twig */
class __TwigTemplate_c5ca9ec6bee8338f1bbed9492124f148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("::baseAjax.html.twig") : ("::base.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<script>
var \$container = \$('#container');

\$container.imagesLoaded( function(){
  \$container.masonry({
    itemSelector : '.box'
  });
});
</script>
<div class=\"contenido\">
    <div id=\"container\" class=\"clearfix\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <div class=\"box photo col3\">
                <a class=\"imagen-link\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "images"), $this->getContext($context, "i"), array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/project/" . $this->getContext($context, "i")) . ".jpg")), "html", null, true);
            echo "\" alt=\"G+\"/></a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "            <div class=\"box photo col3\">
                <a class=\"imagen-link\" href=\"#\" name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\" onclick=\"getEpisodes('3',this.name);\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tu-proyecto-aca.jpg"), "html", null, true);
        echo "\" alt=\"Tu Proyecto Aca\"/></a>
            </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "relayerrelayerBundle:Default:proyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  59 => 20,  48 => 17,  45 => 16,  41 => 15,  27 => 3,  24 => 2,);
    }
}
