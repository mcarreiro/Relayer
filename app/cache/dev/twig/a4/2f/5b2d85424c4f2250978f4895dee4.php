<?php

/* relayerrelayerBundle:Default:servicios_nuevo.html.twig */
class __TwigTemplate_a42f5b2d85424c4f2250978f4895dee4 extends Twig_Template
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
        echo "<script>
    \$(document).ready(function() {
\$(\".service-box\").css('visibility','hidden');
var FIREFOX = /Firefox/i.test(navigator.userAgent);
if (FIREFOX) {
\$(\".serviceImage\").hoverizr({speedOut: 1, speedIn:1});
}
\$(\".statsService\").hover(function(){\$(\".service-box\").css('visibility','hidden');\$('.statsBox').css('visibility','visible');});
\$(\".muestraService\").hover(function(){\$(\".service-box\").css('visibility','hidden');\$('.muestraBox').css('visibility','visible');});
\$(\".videoService\").hover(function(){\$(\".service-box\").css('visibility','hidden');\$('.videoBox').css('visibility','visible');});
\$(\".socialService\").hover(function(){\$(\".service-box\").css('visibility','hidden');\$('.socialBox').css('visibility','visible');});
\$(\".adsService\").hover(function(){\$(\".service-box\").css('visibility','hidden');\$('.adssBox').css('visibility','visible');});
});
</script>    
<div class=\"contenido-servicio\">
    <div class=\"wrapper\">
        <div class=\"service-box-wrapper leftColumn\"> 
            <div class=\"service-box service-box-left statsBox\">
                <div class=\"titulo-service service-titulo\">STATS</div>
                <div class=\"service-text\">
                    Examiná quienes miran tu web, cuándo y dónde, de forma eficaz y actualizada
                </div>
            </div>

            <div class=\"service-box service-box-left muestraBox\">
                <div class=\"titulo-service service-titulo\">MUESTRA</div>
                <div class=\"service-text\">
                    Creá y customizá tu propio portafolio
                </div>
            </div>
                
            <div class=\"service-box service-box-left videoBox\">
                <div class=\"titulo-service service-titulo\">VIDEO</div>
                <div class=\"service-text\">
                    Subí y compartí tus videos desde tu web
                </div>
            </div>
        </div>
            <div class=\"service-image-wrapper\">
                <div class=\"service-image statsService\">
                    <img class=\"serviceImage\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services/stats.jpg"), "html", null, true);
        echo "\" alt=\"STATS\"/>
                </div>
            
                <div class=\"service-image muestraService\">
                    <img  class=\"serviceImage\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services/portfolio.jpg"), "html", null, true);
        echo "\" alt=\"MUESTRA\"/>
                </div>
            
                <div class=\"service-image socialService\">
                    <img  class=\"serviceImage\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services/social.jpg"), "html", null, true);
        echo "\" alt=\"SOCIAL\"/>
                </div>

                <div class=\"service-image adsService\">
                    <img  class=\"serviceImage\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services/ads.jpg"), "html", null, true);
        echo "\" alt=\"ADSENSE\"/>
                </div>

                <div class=\"service-image videoService\">
                    <img  class=\"serviceImage\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services/video.jpg"), "html", null, true);
        echo "\" alt=\"VIDEO\"/>
                </div>
        </div>
        
            <div class=\"service-box-wrapper rightColumn\"> 
                <div class=\"service-box service-box-right socialBox\">
                <div class=\"titulo-service service-titulo\">SOCIAL</div>
                <div class=\"service-text\">
                    Optimizamos tus visitas en redes sociales como: <br/> 
                    <div class=\"service-items-social\">
                        Facebook <br/>
                        Twitter <br/>
                        Google +  <br/>
                        YouTube <br/>
                        Tumblr <br/>
                        Instagram <br/>
                        Flickr
                    </div>
                </div>
            </div>
                <div class=\"service-box service-box-right adssBox\">
                <div class=\"titulo-service service-titulo\">\$\$\$</div>
                <div class=\"service-text\">
                    Monetizá tu sitio con publicidad
                </div>
            </div>
        </div>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "relayerrelayerBundle:Default:servicios_nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 59,  90 => 55,  83 => 51,  76 => 47,  69 => 43,  27 => 3,  24 => 2,);
    }
}
