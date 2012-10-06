<?php

/* ::base.html.twig */
class __TwigTemplate_58d9b7fed273d1766065981cc38daabb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"keywords\" content=\"relayer, relayerWeb, solucion, sitio, web, portfolio, pagina, proyectos\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"title\" content=\"Relayer\" />
        <meta name=\"description\" content=\"Relayer es un espacio dedicado a crear sitios para optimizar tu emprendimiento en internet. 
              Además de proveer las herramientas necesarias que hoy en día son estándar en cualquier empresa con plataforma web, nosotros ofrecemos capacitación, asesoramiento técnico y hosting. \" />
        <meta name=\"author\" content=\"Martín Carreiro y Nicolás Amelio Ortiz\" />
        <meta name=\"robots\" content=\"all\" />
        <meta property=\"og:title\" content=\"Relayer\"/> 
        <meta property=\"og:image\" content=\"http://relayer.com.ar";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-web-grande-gato.png"), "html", null, true);
        echo "\"/>
        <meta property=\"og:url\" content=\" http://relayer.com.ar/\" />
        <meta property=\"og:site_name\" content=\"Relayer\"/>
        <meta property=\"og:type\" content=\"website\"/>
        <meta property=\"og:description\" content=\"Relayer es un espacio dedicado a crear sitios para optimizar tu emprendimiento en internet. 
              Además de proveer las herramientas necesarias que hoy en día son estándar en cualquier empresa con plataforma web, nosotros ofrecemos capacitación, asesoramiento técnico y hosting. \"/>
        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
            <script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35047851-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <div class=\"wrapper\">
            <a href=\"#\" name=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\" onclick=\"getEpisodes('1',this.name);\"><img alt=\"relayer\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-web.png"), "html", null, true);
        echo "\" /></a>
        <div class=\"social\">
        <!-- Aca va lo social -->    
        </div>
            <div class=\"menu\">
                <div class=buttons>
                    <ul>
                    <div class=\"menuSelector\"></div>
                    <li id=\"1\">    
                        <a href=\"#\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\" style=\"color: #f3f3f3;\"class=\"menuButton\"  value=\"1\" >Home</a>
                    </li>  
                    <li id=\"2\">
               <a href=\"#\" name=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos"), "html", null, true);
        echo "\" class=\"menuButton\" value=\"2\" >Proyectos</a>
                    </li>
                    <li id=\"4\">
                    <a href=\"#\" name=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios"), "html", null, true);
        echo "\" class=\"menuButton\" value=\"4\" >Servicios</a>
                    </li>
                   <li id=\"3\">
                    <a href=\"#\" name=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\" class=\"menuButton\" value=\"3\" >Contacto</a>
                    </li>
                    
                    </ul>
            </div>
            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "                <div class=\"footer\">
                    Relayer | &#64 Martín Carreiro & Nicolás Amelio-Ortiz | 2012 | Todos los derechos reservados
                </div>     
                    <div class=\"maxi-juan-fran-agus-franquito-angel-putos\"></div>
        </div>
        </div>
    </body>
</html>
";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "Relayer";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/service.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.21.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.infieldlabel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.hoverizr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
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
        return array (  192 => 76,  186 => 34,  182 => 33,  178 => 32,  174 => 31,  170 => 30,  166 => 29,  162 => 28,  157 => 27,  154 => 26,  148 => 23,  144 => 22,  139 => 21,  136 => 20,  130 => 19,  118 => 77,  116 => 76,  108 => 71,  102 => 68,  96 => 65,  90 => 62,  76 => 53,  55 => 36,  53 => 26,  50 => 25,  48 => 20,  44 => 19,  35 => 13,  21 => 1,);
    }
}
