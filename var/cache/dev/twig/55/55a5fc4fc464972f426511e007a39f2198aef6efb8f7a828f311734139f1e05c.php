<?php

/* AdresseBundle:Default:index.html.twig */
class __TwigTemplate_c975decf6269334ad01ba66afd53b1d13f42a6915a16cc996e7ed99204d20fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff9697945169a4d8f40b2812d8c2d72b27323f9f5bbe63c064db518f60958a36 = $this->env->getExtension("native_profiler");
        $__internal_ff9697945169a4d8f40b2812d8c2d72b27323f9f5bbe63c064db518f60958a36->enter($__internal_ff9697945169a4d8f40b2812d8c2d72b27323f9f5bbe63c064db518f60958a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t    <meta charset=\"UTF-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "\t</body>
</html>";
        
        $__internal_ff9697945169a4d8f40b2812d8c2d72b27323f9f5bbe63c064db518f60958a36->leave($__internal_ff9697945169a4d8f40b2812d8c2d72b27323f9f5bbe63c064db518f60958a36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_544680d860a10ccb5e428367a938cce0839494dbe6a5866a475956aa04c4d086 = $this->env->getExtension("native_profiler");
        $__internal_544680d860a10ccb5e428367a938cce0839494dbe6a5866a475956aa04c4d086->enter($__internal_544680d860a10ccb5e428367a938cce0839494dbe6a5866a475956aa04c4d086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet";
        
        $__internal_544680d860a10ccb5e428367a938cce0839494dbe6a5866a475956aa04c4d086->leave($__internal_544680d860a10ccb5e428367a938cce0839494dbe6a5866a475956aa04c4d086_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7062b0f6eee9a8450720f63e021796d5ca3d1a4bd8e4c1b8b51aee6f0194377 = $this->env->getExtension("native_profiler");
        $__internal_c7062b0f6eee9a8450720f63e021796d5ca3d1a4bd8e4c1b8b51aee6f0194377->enter($__internal_c7062b0f6eee9a8450720f63e021796d5ca3d1a4bd8e4c1b8b51aee6f0194377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7062b0f6eee9a8450720f63e021796d5ca3d1a4bd8e4c1b8b51aee6f0194377->leave($__internal_c7062b0f6eee9a8450720f63e021796d5ca3d1a4bd8e4c1b8b51aee6f0194377_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  50 => 5,  42 => 10,  40 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 	    <meta charset="UTF-8">*/
/* 		<title>{% block title %}Carnet{% endblock %}</title>*/
/* 		<link rel="stylesheet" type="text/css" href="{{asset('bundles/bootstrap/css/bootstrap.min.css')}}">*/
/* 	</head>*/
/* 	<body>*/
/* 		{% block body %}{% endblock %}*/
/* 	</body>*/
/* </html>*/
