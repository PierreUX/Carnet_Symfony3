<?php

/* AdresseBundle:Login:deconnection.html.twig */
class __TwigTemplate_6a1e1ca337fb4c4ada7c0aa146311e6544a4c379db4c39ab0eceb33d0a2d3931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdresseBundle:Login:deconnection.html.twig", 1);
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
        $__internal_bb6da7b11bdb55665d1ff55592d46b29b95fe0902fd54390185925df13e99e97 = $this->env->getExtension("native_profiler");
        $__internal_bb6da7b11bdb55665d1ff55592d46b29b95fe0902fd54390185925df13e99e97->enter($__internal_bb6da7b11bdb55665d1ff55592d46b29b95fe0902fd54390185925df13e99e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Login:deconnection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6da7b11bdb55665d1ff55592d46b29b95fe0902fd54390185925df13e99e97->leave($__internal_bb6da7b11bdb55665d1ff55592d46b29b95fe0902fd54390185925df13e99e97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca5e816545722dc45c3f59f9f4d2159d47135a9ac62dd6da2245858893c97b34 = $this->env->getExtension("native_profiler");
        $__internal_ca5e816545722dc45c3f59f9f4d2159d47135a9ac62dd6da2245858893c97b34->enter($__internal_ca5e816545722dc45c3f59f9f4d2159d47135a9ac62dd6da2245858893c97b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdresseBundle:Login:deconnection";
        
        $__internal_ca5e816545722dc45c3f59f9f4d2159d47135a9ac62dd6da2245858893c97b34->leave($__internal_ca5e816545722dc45c3f59f9f4d2159d47135a9ac62dd6da2245858893c97b34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05200ce4a312e70112cbdadda297c4610c309c772f6bceddf2257cf9cfb1141b = $this->env->getExtension("native_profiler");
        $__internal_05200ce4a312e70112cbdadda297c4610c309c772f6bceddf2257cf9cfb1141b->enter($__internal_05200ce4a312e70112cbdadda297c4610c309c772f6bceddf2257cf9cfb1141b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Login:deconnection page</h1>
";
        
        $__internal_05200ce4a312e70112cbdadda297c4610c309c772f6bceddf2257cf9cfb1141b->leave($__internal_05200ce4a312e70112cbdadda297c4610c309c772f6bceddf2257cf9cfb1141b_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Login:deconnection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AdresseBundle:Login:deconnection{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Login:deconnection page</h1>*/
/* {% endblock %}*/
/* */
