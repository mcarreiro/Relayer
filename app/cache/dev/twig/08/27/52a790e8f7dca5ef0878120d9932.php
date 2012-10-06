<?php

/* relayerrelayerBundle:Default:contacto.html.twig */
class __TwigTemplate_082752a790e8f7dca5ef0878120d9932 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\t\t\t\$(function(){
\t\t\t
\t\t\t    // ----- Label effect ----- //
\t\t\t    
\t\t\t\t\$(\"label\").inFieldLabels();
\t\t\t\t
\t\t\t    // ----- Form submissions & error handeling ----- //
\t\t\t
\t\t\t\t\$(\"#email\").validate({
\t\t\t\t   errorClass: \"form_error\",
                                                                           showErrors: function(errorMap, errorList) {
                                                                            this.defaultShowErrors();
                                                                            },
\t\t\t\t   submitHandler: function(form) {
\t\t\t\t   \t\t\$(\".ajaxLoader\").css('visibility','visible');
\t\t\t\t\t\tjQuery(form).ajaxSubmit({
\t\t\t\t\t\t\ttarget: \"#email .message\",
\t\t\t\t\t\t\tclearForm: true,
\t\t\t\t\t\t\tsuccess: function() { 
\t\t\t\t\t\t        \$(\".ajaxLoader\").css('visibility','hidden');
\t\t\t\t\t\t        \$(\"#email .message\").css('display', 'block');
                                                                                                                    \$(\".email-success\").css('visibility','visible');
\t\t\t\t\t\t    } \t\t\t
\t\t\t\t\t    });
\t\t\t\t   }
\t\t\t\t});
                                jQuery.extend(jQuery.validator.messages, {
    required: \"Este campo es requerido.\",
    email: \"Ingresá un mail válido.\",
    url: \"Please enter a valid URL.\",
    date: \"Please enter a valid date.\",
    dateISO: \"Please enter a valid date (ISO).\",
    number: \"Please enter a valid number.\",
    digits: \"Please enter only digits.\",
    creditcard: \"Please enter a valid credit card number.\",
    equalTo: \"Please enter the same value again.\",
    accept: \"Please enter a value with a valid extension.\",
    maxlength: jQuery.validator.format(\"Please enter no more than {0} characters.\"),
    minlength: jQuery.validator.format(\"Please enter at least {0} characters.\"),
    rangelength: jQuery.validator.format(\"Please enter a value between {0} and {1} characters long.\"),
    range: jQuery.validator.format(\"Please enter a value between {0} and {1}.\"),
    max: jQuery.validator.format(\"Please enter a value less than or equal to {0}.\"),
    min: jQuery.validator.format(\"Please enter a value greater than or equal to {0}.\")
});
\t\t\t});
\t\t</script>
<div class=\"contenido\">
    <div class=\"form-wrapper\">
\t\t\t<form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sendEmail"), "html", null, true);
        echo "\" method=\"post\" id=\"email\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"message\"><p class=\"success\">Your information has been submitted. And we are reading your email right now. Honestly we are!!</p></div>
\t\t\t\t\t<div class=\"formfield\">
\t\t\t\t\t\t<input type=\"text\"class=\"text required\" name=\"contact_who\" id=\"contact_who\" value=\"Nombre\" 
                       onclick=\"if(this.value=='Nombre'){this.value=''}\" onblur=\"if(this.value==''){this.value='Nombre'}\">
\t\t\t\t\t</div><!-- /.formfield -->
\t\t\t\t\t<div class=\"formfield\">

\t\t\t\t\t\t<input type=\"text\" class=\"text required email\" name=\"contact_sendto\" id=\"contact_sendto\" value=\"Email\" 
                       onclick=\"if(this.value=='Email'){this.value=''}\" onblur=\"if(this.value==''){this.value='Email'}\">
\t\t\t\t\t</div><!-- /.formfield -->
\t\t\t\t\t<div class=\"formfield\">

\t\t\t\t\t\t<input type=\"text\" class=\"text required\" name=\"contact_subject\" id=\"contact_subject\" value=\"Asunto\" 
                       onclick=\"if(this.value=='Asunto'){this.value=''}\" onblur=\"if(this.value==''){this.value='Asunto'}\">
\t\t\t\t\t</div><!-- /.formfield -->
\t\t\t\t\t<div class=\"formfield\">
\t\t\t\t\t\t
\t\t\t\t\t\t<textarea name=\"contact_message\" class=\"required\" id=\"contact_message\" value=\"Mensaje\" 
                       onclick=\"if(this.value=='Mensaje'){this.value=''}\" onblur=\"if(this.value==''){this.value='Mensaje'}\"></textarea>
\t\t\t\t\t</div><!-- /.formfield -->
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"formfield\">
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Enviar mensaje\" />
\t\t\t\t</div><!-- /.formfield -->
\t\t\t</form><!-- /#email -->\t
\t\t</div> <!-- .form-wrapper -->
    
<div class=\"titulo-contenido\">
        Contacto
            <div class=\"text\">
                Para cualquier consulta que tengas no dudes en enviarnos tu mensaje.<br/>
                Seguinos en Facebook y Google Plus para tips y updates.
            </div>
 
            <div class=\"social-text\">
                <a href=\"https://www.facebook.com/pages/Relayer/343866349030802\" target=\"_blank\"  alt=\"FB\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/FB.png"), "html", null, true);
        echo "\" alt=\"FB\"/></a>
                <a href=\"https://plus.google.com/117218902755088909505/posts\" target=\"_blank\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/GP.png"), "html", null, true);
        echo "\" alt=\"G+\"/></a>
            </div>
        <img style=\"visibility: hidden\" class=\"ajaxLoader\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ajax-loader.gif"), "html", null, true);
        echo "\"/>
        <div class=\"email-success\">
            Tu mail fue enviado correctamente! A la brevedad nos estaremos comunicando.
             </div>
    </div>      
</div>
";
    }

    public function getTemplateName()
    {
        return "relayerrelayerBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 92,  122 => 90,  118 => 89,  78 => 52,  27 => 3,  24 => 2,);
    }
}
