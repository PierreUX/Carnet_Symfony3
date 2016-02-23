<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9cfe8b908230b847eca4682838e3ffe3532b9e31c20c8b6b53734f61ca6e2c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b777210da97f85a81677719c8c2ff1ac9f1445be837365b804be3377c56d381b = $this->env->getExtension("native_profiler");
        $__internal_b777210da97f85a81677719c8c2ff1ac9f1445be837365b804be3377c56d381b->enter($__internal_b777210da97f85a81677719c8c2ff1ac9f1445be837365b804be3377c56d381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b777210da97f85a81677719c8c2ff1ac9f1445be837365b804be3377c56d381b->leave($__internal_b777210da97f85a81677719c8c2ff1ac9f1445be837365b804be3377c56d381b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48659371b1b5ecfaee059a6bcae900927175bb1529c4c3aad712f71c65d2f28b = $this->env->getExtension("native_profiler");
        $__internal_48659371b1b5ecfaee059a6bcae900927175bb1529c4c3aad712f71c65d2f28b->enter($__internal_48659371b1b5ecfaee059a6bcae900927175bb1529c4c3aad712f71c65d2f28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48659371b1b5ecfaee059a6bcae900927175bb1529c4c3aad712f71c65d2f28b->leave($__internal_48659371b1b5ecfaee059a6bcae900927175bb1529c4c3aad712f71c65d2f28b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_451be0332d28769e3c6633bd9adcef21a0733f4b2f47b88267ec8a5da69155c2 = $this->env->getExtension("native_profiler");
        $__internal_451be0332d28769e3c6633bd9adcef21a0733f4b2f47b88267ec8a5da69155c2->enter($__internal_451be0332d28769e3c6633bd9adcef21a0733f4b2f47b88267ec8a5da69155c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_451be0332d28769e3c6633bd9adcef21a0733f4b2f47b88267ec8a5da69155c2->leave($__internal_451be0332d28769e3c6633bd9adcef21a0733f4b2f47b88267ec8a5da69155c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_462069b22e710ffd94828e7fec087d9b3f49598e7fa2120549f03d032a64f00e = $this->env->getExtension("native_profiler");
        $__internal_462069b22e710ffd94828e7fec087d9b3f49598e7fa2120549f03d032a64f00e->enter($__internal_462069b22e710ffd94828e7fec087d9b3f49598e7fa2120549f03d032a64f00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_462069b22e710ffd94828e7fec087d9b3f49598e7fa2120549f03d032a64f00e->leave($__internal_462069b22e710ffd94828e7fec087d9b3f49598e7fa2120549f03d032a64f00e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
