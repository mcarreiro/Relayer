<?php

/* relayerrelayerBundle:Default:index.html.twig */
class __TwigTemplate_0776c24c4cc2bb9296166bd4b4018f94 extends Twig_Template
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
        echo "<div class=\"contenido\">
    <div class=\"titulo-contenido\">
        Relayer Argentina, <br/>tu solución en la web
            <div class=\"text\">
                Relayer es un espacio dedicado a crear sitios para optimizar tu emprendimiento en internet.
                Además de proveer las herramientas necesarias que hoy en día son estándar en cualquier empresa
                con plataforma web, nosotros ofrecemos capacitación, asesoramiento técnico y hosting.<br/><br/>
                No duden en contactarnos y empezar a desarrollarse en internet!
            </div>
            <div class=\"social-text\">
                <a href=\"https://www.facebook.com/pages/Relayer/343866349030802\" target=\"_blank\"  alt=\"FB\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/FB.png"), "html", null, true);
        echo "\" alt=\"FB\"/></a>
                <a href=\"https://plus.google.com/117218902755088909505/posts\" target=\"_blank\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/GP.png"), "html", null, true);
        echo "\" alt=\"G+\"/></a>
            </div>
    </div>      
        
    
    <div class=\"ribbon-imagen\">
        <strong class=\"ribbon-imagen-content\">
            <img class=\"ribbon-imagen-content\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.png"), "html", null, true);
        echo "\" width=\"600px\" alt=\"Lolba\"/>
        </strong>
    </div>
        
    <div class=\"ribbon\">
        <strong class=\"ribbon-content\">
            <a class=\"ribbon-item\" href=\"#\" name=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos"), "html", null, true);
        echo "\" onclick=\"getEpisodes('2',this.name);\">Proyectos</a><br/>
            <a class=\"ribbon-item\" href=\"#\" name=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios"), "html", null, true);
        echo "\" onclick=\"getEpisodes('4',this.name);\">Servicios</a><br/>
            <a class=\"ribbon-item\" href=\"#\" name=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\" onclick=\"getEpisodes('3',this.name);\">Contacto</a>
        </strong>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "relayerrelayerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  66 => 28,  62 => 27,  53 => 21,  43 => 14,  39 => 13,  27 => 3,  24 => 2,);
    }
}
