<?php

/* ::base.html.twig */
class __TwigTemplate_47103c6660e5ff33c06073ea25f4c67e0eebe0079c4b092822dab44f4456f2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c260cc1ce86df478e73ec9b57483f3e3c87b15a3ee77b2b0f9530629106543fa = $this->env->getExtension("native_profiler");
        $__internal_c260cc1ce86df478e73ec9b57483f3e3c87b15a3ee77b2b0f9530629106543fa->enter($__internal_c260cc1ce86df478e73ec9b57483f3e3c87b15a3ee77b2b0f9530629106543fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c260cc1ce86df478e73ec9b57483f3e3c87b15a3ee77b2b0f9530629106543fa->leave($__internal_c260cc1ce86df478e73ec9b57483f3e3c87b15a3ee77b2b0f9530629106543fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d8a0f7e9d040fc12e27112d35e1799207d352ec176ffec723947e1d7b2b9e9 = $this->env->getExtension("native_profiler");
        $__internal_74d8a0f7e9d040fc12e27112d35e1799207d352ec176ffec723947e1d7b2b9e9->enter($__internal_74d8a0f7e9d040fc12e27112d35e1799207d352ec176ffec723947e1d7b2b9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_74d8a0f7e9d040fc12e27112d35e1799207d352ec176ffec723947e1d7b2b9e9->leave($__internal_74d8a0f7e9d040fc12e27112d35e1799207d352ec176ffec723947e1d7b2b9e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cdf316edffaf819903ac1bb5094ad27d87879d3fdbc40ea0f3200bc0864efc3 = $this->env->getExtension("native_profiler");
        $__internal_5cdf316edffaf819903ac1bb5094ad27d87879d3fdbc40ea0f3200bc0864efc3->enter($__internal_5cdf316edffaf819903ac1bb5094ad27d87879d3fdbc40ea0f3200bc0864efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cdf316edffaf819903ac1bb5094ad27d87879d3fdbc40ea0f3200bc0864efc3->leave($__internal_5cdf316edffaf819903ac1bb5094ad27d87879d3fdbc40ea0f3200bc0864efc3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_57c21b35e31360ea40e5d8a3292830a82301431405df53408555a77b22263691 = $this->env->getExtension("native_profiler");
        $__internal_57c21b35e31360ea40e5d8a3292830a82301431405df53408555a77b22263691->enter($__internal_57c21b35e31360ea40e5d8a3292830a82301431405df53408555a77b22263691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57c21b35e31360ea40e5d8a3292830a82301431405df53408555a77b22263691->leave($__internal_57c21b35e31360ea40e5d8a3292830a82301431405df53408555a77b22263691_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebc3101bcadcdd72a94d6fd77c22e9e0e6be8cec36ca5d853846e9075a783a31 = $this->env->getExtension("native_profiler");
        $__internal_ebc3101bcadcdd72a94d6fd77c22e9e0e6be8cec36ca5d853846e9075a783a31->enter($__internal_ebc3101bcadcdd72a94d6fd77c22e9e0e6be8cec36ca5d853846e9075a783a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebc3101bcadcdd72a94d6fd77c22e9e0e6be8cec36ca5d853846e9075a783a31->leave($__internal_ebc3101bcadcdd72a94d6fd77c22e9e0e6be8cec36ca5d853846e9075a783a31_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
