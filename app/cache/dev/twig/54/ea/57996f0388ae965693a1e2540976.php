<?php

/* ::baseAjax.html.twig */
class __TwigTemplate_54ea57996f0388ae965693a1e2540976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <body>
            ";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 5
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baseAjax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 5,  23 => 4,  18 => 1,  127 => 92,  122 => 90,  118 => 89,  78 => 52,  27 => 3,  24 => 2,);
    }
}
