<?php

/* AdresseBundle:Contact:suppression.html.twig */
class __TwigTemplate_8a61213473ebdf8dd282aba4a6bebd0f668fd38a0f24dba49a3bc8c33ada555c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdresseBundle:Contact:suppression.html.twig", 1);
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
        $__internal_b7833ec891b8c047bb38fd14174ce2015160a2f027d4cfb334405b02e91b14dc = $this->env->getExtension("native_profiler");
        $__internal_b7833ec891b8c047bb38fd14174ce2015160a2f027d4cfb334405b02e91b14dc->enter($__internal_b7833ec891b8c047bb38fd14174ce2015160a2f027d4cfb334405b02e91b14dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Contact:suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7833ec891b8c047bb38fd14174ce2015160a2f027d4cfb334405b02e91b14dc->leave($__internal_b7833ec891b8c047bb38fd14174ce2015160a2f027d4cfb334405b02e91b14dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bf1c7f5e1975765a0844915857ff3dfaf3336654fc527d650b0bce9a37ed037 = $this->env->getExtension("native_profiler");
        $__internal_0bf1c7f5e1975765a0844915857ff3dfaf3336654fc527d650b0bce9a37ed037->enter($__internal_0bf1c7f5e1975765a0844915857ff3dfaf3336654fc527d650b0bce9a37ed037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdresseBundle:Contact:Suppression";
        
        $__internal_0bf1c7f5e1975765a0844915857ff3dfaf3336654fc527d650b0bce9a37ed037->leave($__internal_0bf1c7f5e1975765a0844915857ff3dfaf3336654fc527d650b0bce9a37ed037_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d82e2d5cee2f3775297feb976cc7e364e69ad7307fdfda28be6ee4df4d216545 = $this->env->getExtension("native_profiler");
        $__internal_d82e2d5cee2f3775297feb976cc7e364e69ad7307fdfda28be6ee4df4d216545->enter($__internal_d82e2d5cee2f3775297feb976cc7e364e69ad7307fdfda28be6ee4df4d216545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Contact:Suppression page</h1>
";
        
        $__internal_d82e2d5cee2f3775297feb976cc7e364e69ad7307fdfda28be6ee4df4d216545->leave($__internal_d82e2d5cee2f3775297feb976cc7e364e69ad7307fdfda28be6ee4df4d216545_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Contact:suppression.html.twig";
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
/* {% block title %}AdresseBundle:Contact:Suppression{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Contact:Suppression page</h1>*/
/* {% endblock %}*/
/* */
